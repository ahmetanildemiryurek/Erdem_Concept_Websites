<?php 
session_start();
	ob_start();
	include 'baglan.php';

	if(isset($_POST['hakkımızdagüncelle'])){


		$ayarkaydet=$db->prepare("UPDATE ayar SET 

			ayar_instagram=:instagram,
			ayar_tel1=:tel1,
			ayar_tel2=:tel2,
			ayar_mail=:mail,
			ayar_konum=:konum,
			ayar_yazi=:yazi,
			ayar_isler=:isler,
			ayar_guvenlik=:guvenlik,
			ayar_proje=:proje
			WHERE ayar_id=1");

		$update=$ayarkaydet->execute(array(

			'instagram' =>$_POST['ayar_instagram'],
			'tel1'		=>$_POST['ayar_tel1'],
			'tel2'		=>$_POST['ayar_tel2'],
			'mail'		=>$_POST['ayar_mail'],
			'konum'		=>$_POST['ayar_konum'],
			'yazi'		=>$_POST['ayar_yazi'],
			'isler'		=>$_POST['ayar_isler'],
			'guvenlik'	=>$_POST['ayar_guvenlik'],
			'proje'		=>$_POST['ayar_proje']

		));

if ($update){

	Header("Location:hakkımızda.php?durum=ok");
}
	else{
		
		Header("Location:hakkımızda.php?durum=no");	
	}

}
if($_POST['type'] == 'referansEkleme'){
	$query = $db->prepare("INSERT INTO referanslar SET referansbaslik=:refName");
	$ekle = $query->execute(array(
	     "refName" => trim(htmlspecialchars($_POST['refName']))
	));
	if($ekle){
		echo "1";
	}else{
		echo "0";
	}
}
if($_POST['type'] == 'referansSil'){
	$query = $db->prepare("DELETE FROM referanslar WHERE id=:id LIMIT 1");
	$sil = $query->execute(array(
	     "id" => trim(htmlspecialchars($_POST['id']))
	));
	if($sil){
		echo "1";
	}else{
		echo "0";
	}
}
if($_POST['type'] == 'projeekleme'){
	if(count($_FILES) > 0 ){	
		$dbFiles =[];
		for($i = 0; $i < count($_FILES['file']['name']); $i++){
			$path = './projeImg/';
			$filename = rand(0,999999).'-'.$_FILES['file']['name'][$i];
			array_push($dbFiles,$filename);
			$yukle = move_uploaded_file($_FILES['file']['tmp_name'][$i], $path.$filename);
			if(!$yukle){
				echo  'HATA';
				break;
			}

		}
		$query = $db->prepare('INSERT INTO projeler SET projeadi=:projeadi, resim=:resim, mimari=:mimari');
		$ekle = $query->execute(array(
			'projeadi' => trim(htmlspecialchars($_POST['projeadi'])),
			'resim' => json_encode($dbFiles),
			'mimari' => trim(htmlspecialchars($_POST['mimari']))
		));

		if($ekle){
			header('location: projeler.php');
		}
	}else{
		echo 'RESİM YOK';
	}
}


if($_POST['type'] == 'projeSil'){
	$oldData= $db->query('SELECT * FROM projeler WHERE id='.$_POST["id"].' LIMIT 1')->fetch(PDO::FETCH_ASSOC);

	$images = json_decode($oldData['resim']);
	foreach($images as $image){
		$sil = unlink('./projeImg/'.$image);
		if(!$sil){
			echo '0';
			break;
		}
	}
	$query = $db->prepare('DELETE FROM projeler WHERE id=:id');
	$dbSil = $query->execute(array('id'=>$_POST['id']));
	if($dbSil){
		echo '1';	
	}else{
		echo '0';
	}


}
if($_POST['type'] == 'urunekleme'){
	if(count($_FILES) > 0 ){	
		$dbFiles =[];
		for($i = 0; $i < count($_FILES['file']['name']); $i++){
			$path = './urunImg/';
			$filename = rand(0,999999).'-'.$_FILES['file']['name'][$i];
			array_push($dbFiles,$filename);
			$yukle = move_uploaded_file($_FILES['file']['tmp_name'][$i], $path.$filename);
			if(!$yukle){
				echo  'HATA';
				break;
			}

		}
		$query = $db->prepare('INSERT INTO urunler SET urunadi=:urunadi, resim=:resim');
		$ekle = $query->execute(array(
			'urunadi' => trim(htmlspecialchars($_POST['urunadi'])),
			'resim' => json_encode($dbFiles),
		));

		if($ekle){
			header('location: ürün.php');
		}
	}else{
		echo 'RESİM YOK';
	}
}


if($_POST['type'] == 'urunSil'){
	$oldData= $db->query('SELECT * FROM urunler WHERE id='.$_POST["id"].' LIMIT 1')->fetch(PDO::FETCH_ASSOC);

	$images = json_decode($oldData['resim']);
	foreach($images as $image){
		$sil = unlink('./urunImg/'.$image);
		if(!$sil){
			echo '0';
			break;
		}
	}
	$query = $db->prepare('DELETE FROM urunler WHERE id=:id');
	$dbSil = $query->execute(array('id'=>$_POST['id']));
	if($dbSil){
		echo '1';	
	}else{
		echo '0';
	}


}

if($_POST['type'] == 'admingirisformu'){
	$gelenKadi = isset($_POST['username'])? trim(htmlspecialchars($_POST['username'])): false;
	$gelenSifre = isset($_POST['password'])? trim(htmlspecialchars($_POST['password'])): false;
	if(!$gelenSifre || !$gelenKadi){
		echo '0';
	}
	$query = $db->query("SELECT * FROM `admin`", PDO::FETCH_ASSOC);
	 $counter = 0;
	 foreach($query as $q){
	 	if($q['kadi'] == $gelenKadi && $q['sifre'] == $gelenSifre){
	 		$counter++;
	 	}
	 }
	if($counter >= 1){
		$_SESSION['admin-erdemconcept123456'] = $gelenKadi;
		echo '1';
	}else{
		echo '0';
	}
}

?>


