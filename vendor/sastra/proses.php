<?php

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'kamus');
//error_reporting(0);
$time_start = microtime(true); 
function cekKamus($kata){ 
   $conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'kamus'); 
    
$hasil = $conn->query("SELECT * from dictionary where word ='$kata' LIMIT 1");
			$result = mysqli_num_rows($hasil);
	
	if($result==1){
		return true; // True jika ada
	}else{
		return false; // jika tidak ada FALSE
	}
}





$stopwords=array('ada'=>'1','adalah'=>'2','adanya'=>'3','adapun'=>'4','agak'=>'5','agaknya'=>'6','agar'=>'7','akan'=>'8','akankah'=>'9','akhir'=>'10','akhiri'=>'11','akhirnya'=>'12','aku'=>'13','akulah'=>'14','amat'=>'15','amatlah'=>'16','anda'=>'17','andalah'=>'18','antar'=>'19','antara'=>'20','antaranya'=>'21','apa'=>'22','apaan'=>'23','apabila'=>'24','apakah'=>'25','apalagi'=>'26','apatah'=>'27','artinya'=>'28','asal'=>'29','asalkan'=>'30','atas'=>'31','atau'=>'32','ataukah'=>'33','ataupun'=>'34','awal'=>'35','awalnya'=>'36','bagai'=>'37','bagaikan'=>'38','bagaimana'=>'39','bagaimanakah'=>'40','bagaimanapun'=>'41','bagi'=>'42','bagian'=>'43','bahkan'=>'44','bahwa'=>'45','bahwasanya'=>'46','baik'=>'47','bakal'=>'48','bakalan'=>'49','balik'=>'50','banyak'=>'51','bapak'=>'52','baru'=>'53','bawah'=>'54','beberapa'=>'55','begini'=>'56','beginian'=>'57','beginikah'=>'58','beginilah'=>'59','begitu'=>'60','begitukah'=>'61','begitulah'=>'62','begitupun'=>'63','bekerja'=>'64','belakang'=>'65','belakangan'=>'66','belum'=>'67','belumlah'=>'68','benar'=>'69','benarkah'=>'70','benarlah'=>'71','berada'=>'72','berakhir'=>'73','berakhirlah'=>'74','berakhirnya'=>'75','berapa'=>'76','berapakah'=>'77','berapalah'=>'78','berapapun'=>'79','berarti'=>'80','berawal'=>'81','berbagai'=>'82','berdatangan'=>'83','beri'=>'84','berikan'=>'85','berikut'=>'86','berikutnya'=>'87','berjumlah'=>'88','berkali-kali'=>'89','berkata'=>'90','berkehendak'=>'91','berkeinginan'=>'92','berkenaan'=>'93','berlainan'=>'94','berlalu'=>'95','berlangsung'=>'96','berlebihan'=>'97','bermacam'=>'98','bermacam-macam'=>'99','bermaksud'=>'100','bermula'=>'101','bersama'=>'102','bersama-sama'=>'103','bersiap'=>'104','bersiap-siap'=>'105','bertanya'=>'106','bertanya-tanya'=>'107','berturut'=>'108','berturut-turut'=>'109','bertutur'=>'110','berujar'=>'111','berupa'=>'112','besar'=>'113','betul'=>'114','betulkah'=>'115','biasa'=>'116','biasanya'=>'117','bila'=>'118','bilakah'=>'119','bisa'=>'120','bisakah'=>'121','boleh'=>'122','bolehkah'=>'123','bolehlah'=>'124','buat'=>'125','bukan'=>'126','bukankah'=>'127','bukanlah'=>'128','bukannya'=>'129','bulan'=>'130','bung'=>'131','cara'=>'132','caranya'=>'133','cukup'=>'134','cukupkah'=>'135','cukuplah'=>'136','cuma'=>'137','dahulu'=>'138','dalam'=>'139','dan'=>'140','dapat'=>'141','dari'=>'142','daripada'=>'143','datang'=>'144','dekat'=>'145','demi'=>'146','demikian'=>'147','demikianlah'=>'148','dengan'=>'149','depan'=>'150','di'=>'151','dia'=>'152','diakhiri'=>'153','diakhirinya'=>'154','dialah'=>'155','diantara'=>'156','diantaranya'=>'157','diberi'=>'158','diberikan'=>'159','diberikannya'=>'160','dibuat'=>'161','dibuatnya'=>'162','didapat'=>'163','didatangkan'=>'164','digunakan'=>'165','diibaratkan'=>'166','diibaratkannya'=>'167','diingat'=>'168','diingatkan'=>'169','diinginkan'=>'170','dijawab'=>'171','dijelaskan'=>'172','dijelaskannya'=>'173','dikarenakan'=>'174','dikatakan'=>'175','dikatakannya'=>'176','dikerjakan'=>'177','diketahui'=>'178','diketahuinya'=>'179','dikira'=>'180','dilakukan'=>'181','dilalui'=>'182','dilihat'=>'183','dimaksud'=>'184','dimaksudkan'=>'185','dimaksudkannya'=>'186','dimaksudnya'=>'187','diminta'=>'188','dimintai'=>'189','dimisalkan'=>'190','dimulai'=>'191','dimulailah'=>'192','dimulainya'=>'193','dimungkinkan'=>'194','dini'=>'195','dipastikan'=>'196','diperbuat'=>'197','diperbuatnya'=>'198','dipergunakan'=>'199','diperkirakan'=>'200','diperlihatkan'=>'201','diperlukan'=>'202','diperlukannya'=>'203','dipersoalkan'=>'204','dipertanyakan'=>'205','dipunyai'=>'206','diri'=>'207','dirinya'=>'208','disampaikan'=>'209','disebut'=>'210','disebutkan'=>'211','disebutkannya'=>'212','disini'=>'213','disinilah'=>'214','ditambahkan'=>'215','ditandaskan'=>'216','ditanya'=>'217','ditanyai'=>'218','ditanyakan'=>'219','ditegaskan'=>'220','ditujukan'=>'221','ditunjuk'=>'222','ditunjuki'=>'223','ditunjukkan'=>'224','ditunjukkannya'=>'225','ditunjuknya'=>'226','dituturkan'=>'227','dituturkannya'=>'228','diucapkan'=>'229','diucapkannya'=>'230','diungkapkan'=>'231','dong'=>'232','dua'=>'233','dulu'=>'234','empat'=>'235','enggak'=>'236','enggaknya'=>'237','entah'=>'238','entahlah'=>'239','guna'=>'240','gunakan'=>'241','hal'=>'242','hampir'=>'243','hanya'=>'244','hanyalah'=>'245','hari'=>'246','harus'=>'247','haruslah'=>'248','harusnya'=>'249','hendak'=>'250','hendaklah'=>'251','hendaknya'=>'252','hingga'=>'253','ia'=>'254','ialah'=>'255','ibarat'=>'256','ibaratkan'=>'257','ibaratnya'=>'258','ibu'=>'259','ikut'=>'260','ingat'=>'261','ingat-ingat'=>'262','ingin'=>'263','inginkah'=>'264','inginkan'=>'265','ini'=>'266','inikah'=>'267','inilah'=>'268','itu'=>'269','itukah'=>'270','itulah'=>'271','jadi'=>'272','jadilah'=>'273','jadinya'=>'274','jangan'=>'275','jangankan'=>'276','janganlah'=>'277','jauh'=>'278','jawab'=>'279','jawaban'=>'280','jawabnya'=>'281','jelas'=>'282','jelaskan'=>'283','jelaslah'=>'284','jelasnya'=>'285','jika'=>'286','jikalau'=>'287','juga'=>'288','jumlah'=>'289','jumlahnya'=>'290','justru'=>'291','kala'=>'292','kalau'=>'293','kalaulah'=>'294','kalaupun'=>'295','kalian'=>'296','kami'=>'297','kamilah'=>'298','kamu'=>'299','kamulah'=>'300','kan'=>'301','kapan'=>'302','kapankah'=>'303','kapanpun'=>'304','karena'=>'305','karenanya'=>'306','kasus'=>'307','kata'=>'308','katakan'=>'309','katakanlah'=>'310','katanya'=>'311','ke'=>'312','keadaan'=>'313','kebetulan'=>'314','kecil'=>'315','kedua'=>'316','keduanya'=>'317','keinginan'=>'318','kelamaan'=>'319','kelihatan'=>'320','kelihatannya'=>'321','kelima'=>'322','keluar'=>'323','kembali'=>'324','kemudian'=>'325','kemungkinan'=>'326','kemungkinannya'=>'327','kenapa'=>'328','kepada'=>'329','kepadanya'=>'330','kesampaian'=>'331','keseluruhan'=>'332','keseluruhannya'=>'333','keterlaluan'=>'334','ketika'=>'335','khususnya'=>'336','kini'=>'337','kinilah'=>'338','kira'=>'339','kira-kira'=>'340','kiranya'=>'341','kita'=>'342','kitalah'=>'343','kok'=>'344','kurang'=>'345','lagi'=>'346','lagian'=>'347','lah'=>'348','lain'=>'349','lainnya'=>'350','lalu'=>'351','lama'=>'352','lamanya'=>'353','lanjut'=>'354','lanjutnya'=>'355','lebih'=>'356','lewat'=>'357','lima'=>'358','luar'=>'359','macam'=>'360','maka'=>'361','makanya'=>'362','makin'=>'363','malah'=>'364','malahan'=>'365','mampu'=>'366','mampukah'=>'367','mana'=>'368','manakala'=>'369','manalagi'=>'370','masa'=>'371','masalah'=>'372','masalahnya'=>'373','masih'=>'374','masihkah'=>'375','masing'=>'376','masing-masing'=>'377','mau'=>'378','maupun'=>'379','melainkan'=>'380','melakukan'=>'381','melalui'=>'382','melihat'=>'383','melihatnya'=>'384','memang'=>'385','memastikan'=>'386','memberi'=>'387','memberikan'=>'388','membuat'=>'389','memerlukan'=>'390','memihak'=>'391','meminta'=>'392','memintakan'=>'393','memisalkan'=>'394','memperbuat'=>'395','mempergunakan'=>'396','memperkirakan'=>'397','memperlihatkan'=>'398','mempersiapkan'=>'399','mempersoalkan'=>'400','mempertanyakan'=>'401','mempunyai'=>'402','memulai'=>'403','memungkinkan'=>'404','menaiki'=>'405','menambahkan'=>'406','menandaskan'=>'407','menanti'=>'408','menanti-nanti'=>'409','menantikan'=>'410','menanya'=>'411','menanyai'=>'412','menanyakan'=>'413','mendapat'=>'414','mendapatkan'=>'415','mendatang'=>'416','mendatangi'=>'417','mendatangkan'=>'418','menegaskan'=>'419','mengakhiri'=>'420','mengapa'=>'421','mengatakan'=>'422','mengatakannya'=>'423','mengenai'=>'424','mengerjakan'=>'425','mengetahui'=>'426','menggunakan'=>'427','menghendaki'=>'428','mengibaratkan'=>'429','mengibaratkannya'=>'430','mengingat'=>'431','mengingatkan'=>'432','menginginkan'=>'433','mengira'=>'434','mengucapkan'=>'435','mengucapkannya'=>'436','mengungkapkan'=>'437','menjadi'=>'438','menjawab'=>'439','menjelaskan'=>'440','menuju'=>'441','menunjuk'=>'442','menunjuki'=>'443','menunjukkan'=>'444','menunjuknya'=>'445','menurut'=>'446','menuturkan'=>'447','menyampaikan'=>'448','menyangkut'=>'449','menyatakan'=>'450','menyebutkan'=>'451','menyeluruh'=>'452','menyiapkan'=>'453','merasa'=>'454','mereka'=>'455','merekalah'=>'456','merupakan'=>'457','meski'=>'458','meskipun'=>'459','meyakini'=>'460','meyakinkan'=>'461','minta'=>'462','mirip'=>'463','misal'=>'464','misalkan'=>'465','misalnya'=>'466','mula'=>'467','mulai'=>'468','mulailah'=>'469','mulanya'=>'470','mungkin'=>'471','mungkinkah'=>'472','nah'=>'473','naik'=>'474','namun'=>'475','nanti'=>'476','nantinya'=>'477','nyaris'=>'478','nyatanya'=>'479','oleh'=>'480','olehnya'=>'481','pada'=>'482','padahal'=>'483','padanya'=>'484','pak'=>'485','paling'=>'486','panjang'=>'487','pantas'=>'488','para'=>'489','pasti'=>'490','pastilah'=>'491','penting'=>'492','pentingnya'=>'493','per'=>'494','percuma'=>'495','perlu'=>'496','perlukah'=>'497','perlunya'=>'498','pernah'=>'499','persoalan'=>'500','pertama'=>'501','pertama-tama'=>'502','pertanyaan'=>'503','pertanyakan'=>'504','pihak'=>'505','pihaknya'=>'506','pukul'=>'507','pula'=>'508','pun'=>'509','punya'=>'510','rasa'=>'511','rasanya'=>'512','rata'=>'513','rupanya'=>'514','saat'=>'515','saatnya'=>'516','saja'=>'517','sajalah'=>'518','saling'=>'519','sama'=>'520','sama-sama'=>'521','sambil'=>'522','sampai'=>'523','sampai-sampai'=>'524','sampaikan'=>'525','sana'=>'526','sangat'=>'527','sangatlah'=>'528','satu'=>'529','saya'=>'530','sayalah'=>'531','se'=>'532','sebab'=>'533','sebabnya'=>'534','sebagai'=>'535','sebagaimana'=>'536','sebagainya'=>'537','sebagian'=>'538','sebaik'=>'539','sebaik-baiknya'=>'540','sebaiknya'=>'541','sebaliknya'=>'542','sebanyak'=>'543','sebegini'=>'544','sebegitu'=>'545','sebelum'=>'546','sebelumnya'=>'547','sebenarnya'=>'548','seberapa'=>'549','sebesar'=>'550','sebetulnya'=>'551','sebisanya'=>'552','sebuah'=>'553','sebut'=>'554','sebutlah'=>'555','sebutnya'=>'556','secara'=>'557','secukupnya'=>'558','sedang'=>'559','sedangkan'=>'560','sedemikian'=>'561','sedikit'=>'562','sedikitnya'=>'563','seenaknya'=>'564','segala'=>'565','segalanya'=>'566','segera'=>'567','seharusnya'=>'568','sehingga'=>'569','seingat'=>'570','sejak'=>'571','sejauh'=>'572','sejenak'=>'573','sejumlah'=>'574','sekadar'=>'575','sekadarnya'=>'576','sekali'=>'577','sekali-kali'=>'578','sekalian'=>'579','sekaligus'=>'580','sekalipun'=>'581','sekarang'=>'582','sekarang'=>'583','sekecil'=>'584','seketika'=>'585','sekiranya'=>'586','sekitar'=>'587','sekitarnya'=>'588','sekurang-kurangnya'=>'589','sekurangnya'=>'590','sela'=>'591','selain'=>'592','selaku'=>'593','selalu'=>'594','selama'=>'595','selama-lamanya'=>'596','selamanya'=>'597','selanjutnya'=>'598','seluruh'=>'599','seluruhnya'=>'600','semacam'=>'601','semakin'=>'602','semampu'=>'603','semampunya'=>'604','semasa'=>'605','semasih'=>'606','semata'=>'607','semata-mata'=>'608','semaunya'=>'609','sementara'=>'610','semisal'=>'611','semisalnya'=>'612','sempat'=>'613','semua'=>'614','semuanya'=>'615','semula'=>'616','sendiri'=>'617','sendirian'=>'618','sendirinya'=>'619','seolah'=>'620','seolah-olah'=>'621','seorang'=>'622','sepanjang'=>'623','sepantasnya'=>'624','sepantasnyalah'=>'625','seperlunya'=>'626','seperti'=>'627','sepertinya'=>'628','sepihak'=>'629','sering'=>'630','seringnya'=>'631','serta'=>'632','serupa'=>'633','sesaat'=>'634','sesama'=>'635','sesampai'=>'636','sesegera'=>'637','sesekali'=>'638','seseorang'=>'639','sesuatu'=>'640','sesuatunya'=>'641','sesudah'=>'642','sesudahnya'=>'643','setelah'=>'644','setempat'=>'645','setengah'=>'646','seterusnya'=>'647','setiap'=>'648','setiba'=>'649','setibanya'=>'650','setidak-tidaknya'=>'651','setidaknya'=>'652','setinggi'=>'653','seusai'=>'654','sewaktu'=>'655','siap'=>'656','siapa'=>'657','siapakah'=>'658','siapapun'=>'659','sini'=>'660','sinilah'=>'661','soal'=>'662','soalnya'=>'663','suatu'=>'664','sudah'=>'665','sudahkah'=>'666','sudahlah'=>'667','supaya'=>'668','tadi'=>'669','tadinya'=>'670','tahu'=>'671','tahun'=>'672','tak'=>'673','tambah'=>'674','tambahnya'=>'675','tampak'=>'676','tampaknya'=>'677','tandas'=>'678','tandasnya'=>'679','tanpa'=>'680','tanya'=>'681','tanyakan'=>'682','tanyanya'=>'683','tapi'=>'684','tegas'=>'685','tegasnya'=>'686','telah'=>'687','tempat'=>'688','tengah'=>'689','tentang'=>'690','tentu'=>'691','tentulah'=>'692','tentunya'=>'693','tepat'=>'694','terakhir'=>'695','terasa'=>'696','terbanyak'=>'697','terdahulu'=>'698','terdapat'=>'699','terdiri'=>'700','terhadap'=>'701','terhadapnya'=>'702','teringat'=>'703','teringat-ingat'=>'704','terjadi'=>'705','terjadilah'=>'706','terjadinya'=>'707','terkira'=>'708','terlalu'=>'709','terlebih'=>'710','terlihat'=>'711','termasuk'=>'712','ternyata'=>'713','tersampaikan'=>'714','tersebut'=>'715','tersebutlah'=>'716','tertentu'=>'717','tertuju'=>'718','terus'=>'719','terutama'=>'720','tetap'=>'721','tetapi'=>'722','tiap'=>'723','tiba'=>'724','tiba-tiba'=>'725','tidak'=>'726','tidakkah'=>'727','tidaklah'=>'728','tiga'=>'729','tinggi'=>'730','toh'=>'731','tunjuk'=>'732','turut'=>'733','tutur'=>'734','tuturnya'=>'735','ucap'=>'736','ucapnya'=>'737','ujar'=>'738','ujarnya'=>'739','umum'=>'740','umumnya'=>'741','ungkap'=>'742','ungkapnya'=>'743','untuk'=>'744','usah'=>'745','usai'=>'746','waduh'=>'747','wah'=>'748','wahai'=>'749','waktu'=>'750','waktunya'=>'751','walau'=>'752','walaupun'=>'753','wong'=>'754','yaitu'=>'755','yakin'=>'756','yakni'=>'757','yang'=>'758');
# used words as key for better performance

// remove stopwords from string
function strip_stopwords($str = "")
{
  global $stopwords;

  // 1.) break string into words
  // [^-\w\'] matches characters, that are not [0-9a-zA-Z_-']
  // if input is unicode/utf-8, the u flag is needed: /pattern/u
  $words = preg_split('/[^-\w\']+/', $str, -1, PREG_SPLIT_NO_EMPTY);

  // 2.) if we have at least 2 words, remove stopwords
  if(count($words) > 1)
  {
    $words = array_filter($words, function ($w) use (&$stopwords) {
      return !isset($stopwords[strtolower($w)]);
      # if utf-8: mb_strtolower($w, "utf-8")
    });
  }

  // check if not too much was removed such as "the the" would return empty
  if(!empty($words))
    return implode(" ", $words);
  return $str;
}




//fungsi untuk menghapus suffix seperti -ku, -mu, -kah, dsb
function Del_Inflection_Suffixes($kata){ 
	$kataAsal = $kata;
	
	if(preg_match('/([km]u|nya|[kl]ah|pun)\z/i',$kata)){ // Cek Inflection Suffixes
		$__kata = preg_replace('/([km]u|nya|[kl]ah|pun)\z/i','',$kata);

		return $__kata;
	}
	return $kataAsal;
}

// Cek Prefix Disallowed Sufixes (Kombinasi Awalan dan Akhiran yang tidak diizinkan)
function Cek_Prefix_Disallowed_Sufixes($kata){

	if(preg_match('/^(be)[[:alpha:]]+/(i)\z/i',$kata)){ // be- dan -i
		return true;
	}

	if(preg_match('/^(se)[[:alpha:]]+/(i|kan)\z/i',$kata)){ // se- dan -i,-kan
		return true;
	}
	
	if(preg_match('/^(di)[[:alpha:]]+/(an)\z/i',$kata)){ // di- dan -an
		return true;
	}
	
	if(preg_match('/^(me)[[:alpha:]]+/(an)\z/i',$kata)){ // me- dan -an
		return true;
	}
	
	if(preg_match('/^(ke)[[:alpha:]]+/(i|kan)\z/i',$kata)){ // ke- dan -i,-kan
		return true;
	}
	return false;
}

// Hapus Derivation Suffixes ("-i", "-an" atau "-kan")
function Del_Derivation_Suffixes($kata){
	$kataAsal = $kata;
	if(preg_match('/(i|an)\z/i',$kata)){ // Cek Suffixes
		$__kata = preg_replace('/(i|an)\z/i','',$kata);
		if(cekKamus($__kata)){ // Cek Kamus
			return $__kata;
		}else if(preg_match('/(kan)\z/i',$kata)){
			$__kata = preg_replace('/(kan)\z/i','',$kata);
			if(cekKamus($__kata)){
				return $__kata;
			}
		}
/*– Jika Tidak ditemukan di kamus –*/
	}
	return $kataAsal;
}

// Hapus Derivation Prefix ("di-", "ke-", "se-", "te-", "be-", "me-", atau "pe-")
function Del_Derivation_Prefix($kata){
	$kataAsal = $kata;

	/* —— Tentukan Tipe Awalan ————*/
	if(preg_match('/^(di|[ks]e)/',$kata)){ // Jika di-,ke-,se-
		$__kata = preg_replace('/^(di|[ks]e)/','',$kata);
		
		if(cekKamus($__kata)){
			return $__kata;
		}
		
		$__kata__ = Del_Derivation_Suffixes($__kata);
			
		if(cekKamus($__kata__)){
			return $__kata__;
		}
		
		if(preg_match('/^(diper)/',$kata)){ //diper-
			$__kata = preg_replace('/^(diper)/','',$kata);
			$__kata__ = Del_Derivation_Suffixes($__kata);
		
			if(cekKamus($__kata__)){
				return $__kata__;
			}
			
		}
		
		if(preg_match('/^(ke[bt]er)/',$kata)){  //keber- dan keter-
			$__kata = preg_replace('/^(ke[bt]er)/','',$kata);
			$__kata__ = Del_Derivation_Suffixes($__kata);
		
			if(cekKamus($__kata__)){
				return $__kata__;
			}
		}
			
	}
	
	if(preg_match('/^([bt]e)/',$kata)){ //Jika awalannya adalah "te-","ter-", "be-","ber-"
		
		$__kata = preg_replace('/^([bt]e)/','',$kata);
		if(cekKamus($__kata)){
			return $__kata; // Jika ada balik
		}
		
		$__kata = preg_replace('/^([bt]e[lr])/','',$kata);	
		if(cekKamus($__kata)){
			return $__kata; // Jika ada balik
		}	
		
		$__kata__ = Del_Derivation_Suffixes($__kata);
		if(cekKamus($__kata__)){
			return $__kata__;
		}
	}
	
	if(preg_match('/^([mp]e)/',$kata)){
		$__kata = preg_replace('/^([mp]e)/','',$kata);
		if(cekKamus($__kata)){
			return $__kata; // Jika ada balik
		}
		$__kata__ = Del_Derivation_Suffixes($__kata);
		if(cekKamus($__kata__)){
			return $__kata__;
		}
		
		if(preg_match('/^(memper)/',$kata)){
			$__kata = preg_replace('/^(memper)/','',$kata);
			if(cekKamus($kata)){
				return $__kata;
			}
			$__kata__ = Del_Derivation_Suffixes($__kata);
			if(cekKamus($__kata__)){
				return $__kata__;
			}
		}
		
		if(preg_match('/^([mp]eng)/',$kata)){
			$__kata = preg_replace('/^([mp]eng)/','',$kata);
			if(cekKamus($__kata)){
				return $__kata; // Jika ada balik
			}
			$__kata__ = Del_Derivation_Suffixes($__kata);
			if(cekKamus($__kata__)){
				return $__kata__;
			}
			
			$__kata = preg_replace('/^([mp]eng)/','k',$kata);
			if(cekKamus($__kata)){
				return $__kata; // Jika ada balik
			}
			$__kata__ = Del_Derivation_Suffixes($__kata);
			if(cekKamus($__kata__)){
				return $__kata__;
			}
		}
		
		if(preg_match('/^([mp]eny)/',$kata)){
			$__kata = preg_replace('/^([mp]eny)/','s',$kata);
			if(cekKamus($__kata)){
				return $__kata; // Jika ada balik
			}
			$__kata__ = Del_Derivation_Suffixes($__kata);
			if(cekKamus($__kata__)){
				return $__kata__;
			}
		}
		
		if(preg_match('/^([mp]e[lr])/',$kata)){
			$__kata = preg_replace('/^([mp]e[lr])/','',$kata);
			if(cekKamus($__kata)){
				return $__kata; // Jika ada balik
			}
			$__kata__ = Del_Derivation_Suffixes($__kata);
			if(cekKamus($__kata__)){
				return $__kata__;
			}
		}
		
		if(preg_match('/^([mp]en)/',$kata)){
			$__kata = preg_replace('/^([mp]en)/','t',$kata);
			if(cekKamus($__kata)){
				return $__kata; // Jika ada balik
			}
			$__kata__ = Del_Derivation_Suffixes($__kata);
			if(cekKamus($__kata__)){
				return $__kata__;
			}
			
			$__kata = preg_replace('/^([mp]en)/','',$kata);
			if(cekKamus($__kata)){
				return $__kata; // Jika ada balik
			}
			$__kata__ = Del_Derivation_Suffixes($__kata);
			if(cekKamus($__kata__)){
				return $__kata__;
			}
		}
			
		if(preg_match('/^([mp]em)/',$kata)){
			$__kata = preg_replace('/^([mp]em)/','',$kata);
			if(cekKamus($__kata)){
				return $__kata; // Jika ada balik
			}
			$__kata__ = Del_Derivation_Suffixes($__kata);
			if(cekKamus($__kata__)){
				return $__kata__;
			}
			
			$__kata = preg_replace('/^([mp]em)/','p',$kata);
			if(cekKamus($__kata)){
				return $__kata; // Jika ada balik
			}
			
			$__kata__ = Del_Derivation_Suffixes($__kata);
			if(cekKamus($__kata__)){
				return $__kata__;
			}
		}	
	}
	return $kataAsal;
}

//fungsi pencarian akar kata
function stemming($kata){ 

	$kataAsal = $kata;

	$cekKata = cekKamus($kata);
	if($cekKata == true){ // Cek Kamus
		return $kata; // Jika Ada maka kata tersebut adalah kata dasar
	}else{ //jika tidak ada dalam kamus maka dilakukan stemming
		$kata = Del_Inflection_Suffixes($kata);
		if(cekKamus($kata)){
			return $kata;
		}
		
		$kata = Del_Derivation_Suffixes($kata);
		if(cekKamus($kata)){
			return $kata;
		}
		
		$kata = Del_Derivation_Prefix($kata);
		if(cekKamus($kata)){
			return $kata;
		}
	}
}

function katahubung($stringg) {
 
$stringg = str_replace(' ', '', $stringg);
  return $stringg;
}

function getNgrams($word, $n) {
        $ngrams = array();
        $len = strlen($word);
        for($i = 0; $i < $len; $i++) {
                if($i > ($n - 2)) {
                        $ng = '';
                        for($j = $n-1; $j >= 0; $j--) {
                                $ng .= $word[$i-$j]; 
                        }
                        $ngrams[] = $ng;
                }
        }
        return $ngrams;
}

function ubahhash($key)
    {
        $charArray = str_split($key);
        $hash = 0;
      $sum = 0;
       $result = array();
        $jml = count($charArray);
        foreach($charArray as $char)
        {
                        $jml--;
            
             $hash = ord($char);
            //echo $hash;
            $z= $hash * pow(10,$jml);
            $result[] = "( ".$hash ." * 10^".$jml." )";
           
            $sum += $z;
           
        }
      $x =$sum % 101;
$sem = implode(' + ', $result) ." = ". $x;


        return $sem;
    }


  function gethash($key)
    {
        $charArray = str_split($key);
        $hash = 0;
      $sum = 0;
       $result = array();
        $jml = count($charArray);
        foreach($charArray as $char)
        {
                        $jml--;
            
             $hash = ord($char);
            //echo $hash;
            $z= $hash * pow(10,$jml);
            $result[] = "( ".$hash ." * 10^".$jml." )";
           
            $sum += $z;
           
        }
      $x =$sum % 101;
        return $x;
    }

  function getrem($key)
    {
        $charArray = str_split($key);
        $hash = 0;
      $sum = 0;
       $result = array();
        $jml = count($charArray);
        foreach($charArray as $char)
        {
                        $jml--;
             $hash = ord($char);
            //echo $hash;
            $z= $hash * pow(10,$jml);
            $result[] = "( ".$hash ." * 10^".$jml." )";
            $sum += $z;
        }
      $x =$sum / 101;
        return $x;
    }

function clean($string) {
       $string = strtolower($string);
       $string = preg_replace('/[^A-Za-z0-9\-]/', ' ', $string);
       $string= preg_replace('/[0-9]+/', '', $string);
        $string = str_replace('-',' ',$string);
    return $string;
}
       
$form = $_POST['teks1'];
$kgrams = $_POST['kgram'];
$randomid = $_POST['randomid'];
$tokenizing9=strip_stopwords(clean($form));                    
$steaming9 = explode(' ',($tokenizing9));
//$valuessteaming9 = array();
//foreach($steaming9 as $katasteaming9){$valuessteaming9[] = stemming($katasteaming9);}
//$x9= katahubung(implode(' ',$valuessteaming9)); 





// include composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// create stemmer
// cukup dijalankan sekali saja, biasanya didaftarkan di service container
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();


// stem
//$sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
$output   = $stemmer->stem($tokenizing9);


$x9= katahubung($output); 
$readngram9 =getNgrams("$x9","$kgrams");
    $readngram9;
    sort($readngram9);
          
	$sa = $conn->query("SELECT id,abstrak FROM abstrak");
	
                    
                    
            $system_answer = array();
           
			foreach ($sa as $key => $value) 
			{
                $system_answer[$key] = clean($value["abstrak"]);
                $id_dokumen = $value["id"];
                $system_answer[$key]= strip_stopwords($system_answer[$key]);
                $baca1=$system_answer[$key];
                $steaming = explode(' ',($baca1));
//                $valuessteaming = array();
//                foreach($steaming as $katasteaming){$valuessteaming[] = stemming($katasteaming);}
//                $keys=   $system_answer[$key]= katahubung(implode(' ',$valuessteaming)); 
                
                
                
                $output   = $stemmer->stem($baca1);
                $keys=   $system_answer[$key] = katahubung($output); 
                
                
                
                $readngram =  $system_answer[$key] =getNgrams("$keys","$kgrams"); 
                $resultintersect=array_intersect($readngram,$readngram9);        
                $resultintersect9=array_intersect($readngram9,$readngram);    
                $total=count($resultintersect);                
                $total9=count($resultintersect);   
                $jtotalarray=count($readngram);
                $jtotalarray9=count($readngram9);                
                if($total>=$total9){
                        $dd=$total;
                }
                elseif($total<=$total9){
                        $dd=$total9;
                }   
                $x=((2*$dd)/($jtotalarray+$jtotalarray9)*100);

//                echo round($x,2)." %";

                   
                 $conn->query("insert into uji(id_asli,id_uji,abstraksi,hasil) values('$id_dokumen','$randomid','$form','$x')");
			}
                    
?>











    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="dist/js/bootstrap.min.js" type="text/javascript"></script>



        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */

            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */

            .row.content {
                height: 450px
            }

            /* Set gray background color and 100% height */

            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */

            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */

            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {
                    height: auto;
                }
            }
        </style>
    </head>

    <body>


        <div class="container text-center">
<div class="row content">
   <div class="col-md-12">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>no</th>
        <th>judul skripsi</th>
        <th>abstraksi</th>
        <th>Tingkat Plagiarisme</th>
       
          
      </tr>
    </thead>
    <tbody>
        
        <?php
        $sa = $conn->query("SELECT abstrak.judul,abstrak.abstrak,uji.hasil FROM abstrak RIGHT JOIN uji ON abstrak.id=uji.id_asli WHERE uji.id_uji='$randomid' ORDER BY uji.hasil DESC LIMIT 5");
        foreach ($sa as $value) 
			{
            ?>
      <tr>
        <td>1</td>
        <td><?= $value["judul"]; ?></td>
        <td><?= $value["abstrak"]; ?></td>
        <td><?= round($value["hasil"],2); ?></td>
     
      </tr>
        <?php
        }
            ?>
    </tbody>
  </table>
    </div>         
</div>
        </div>



    </body>

    </html>
