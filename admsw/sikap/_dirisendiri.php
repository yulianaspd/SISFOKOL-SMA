<?php
session_start();

//fungsi - fungsi
require("../../inc/config.php");
require("../../inc/fungsi.php");
require("../../inc/koneksi.php");
require("../../inc/cek/admsw.php");
require("../../inc/class/paging.php");
$tpl = LoadTpl("../../template/index.html");

nocache;

//nilai
$filenya = "dirisendiri.php";
$judul = "Nilai Sikap Diri Sendiri";
$judulku = "[$siswa_session : $nis2_session.$nm2_session] ==> $judul";
$judulz = $judul;
$tapelkd = nosql($_REQUEST['tapelkd']);
$smtkd = nosql($_REQUEST['smtkd']);
$kelkd = nosql($_REQUEST['kelkd']);
$keahkd = nosql($_REQUEST['keahkd']);
$kompkd = nosql($_REQUEST['kompkd']);
$smtkd = nosql($_REQUEST['smtkd']);
$progkd = nosql($_REQUEST['progkd']);
$s = nosql($_REQUEST['s']);


$ke = "$filenya?tapelkd=$tapelkd&smtkd=$smtkd&kelkd=$kelkd&keahkd=$keahkd&".
			"kompkd=$kompkd&smtkd=$smtkd";



//focus...
if (empty($smtkd))
	{
	$diload = "document.formx.smt.focus();";
	}









//jika simpan
if ($_POST['btnSMP'])
	{
	//ambil nilai
	$jml = nosql($_POST['jml']);
	$tapelkd = nosql($_POST['tapelkd']);
	$kelkd = nosql($_POST['kelkd']);
	$smtkd = nosql($_POST['smtkd']);
	$keahkd = nosql($_POST['keahkd']);
	$kompkd = nosql($_POST['kompkd']);
	$progkd = nosql($_POST['progkd']);


	//ambil semua
	for ($i=1; $i<=$jml;$i++)
		{
		//ambil nilai
		$xyz = md5("$x$i");
		
		$yuk = "pilkd";
		$yuhu = "$yuk$i";
		$kd = nosql($_POST["$yuhu"]);

		$yuk = "pil";
		$yuhu = "$yuk$i";
		$pilnil = nosql($_POST["$yuhu"]);
		

		//del
		mysql_query("DELETE FROM siswa_sikap_dirisendiri ".
							"WHERE kd_tapel = '$tapelkd' ".
							"AND kd_kelas = '$kelkd' ".
							"AND kd_mapel = '$progkd' ".
							"AND kd_siswa = '$kd2_session' ". 
							"AND kd_ket = '$kd'");

							
		//insert
		mysql_query("INSERT INTO siswa_sikap_dirisendiri(kd, kd_siswa, kd_tapel, kd_kelas, ".
							"kd_mapel, kd_ket, pilihan, tgl, postdate) VALUES ".
							"('$xyz', '$kd2_session', '$tapelkd', '$kelkd', ".
							"'$progkd', '$kd', '$pilnil', '$today', '$today')");
		}



	//auto-kembali
	$ke = "$filenya?tapelkd=$tapelkd&smtkd=$smtkd&kelkd=$kelkd&keahkd=$keahkd&".
			"kompkd=$kompkd&smtkd=$smtkd&progkd=$progkd";
	xloc($ke);
	exit();
	}

	
	



//isi *START
ob_start();

//js
require("../../inc/js/jumpmenu.js");
require("../../inc/js/swap.js");
require("../../inc/menu/admsw.php");


//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<form name="formx" method="post" action="'.$filenya.'">';
xheadline($judul);
echo ' [<a href="../index.php" title="Daftar Detail">DAFTAR DETAIL</a>]

<table bgcolor="'.$warnaover.'" width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
<td>
Tahun Pelajaran : ';
//terpilih
$qtpx = mysql_query("SELECT * FROM m_tapel ".
						"WHERE kd = '$tapelkd'");
$rowtpx = mysql_fetch_assoc($qtpx);
$tpx_thn1 = nosql($rowtpx['tahun1']);
$tpx_thn2 = nosql($rowtpx['tahun2']);


echo '<strong>'.$tpx_thn1.'/'.$tpx_thn2.'</strong>,


Kelas : ';
//terpilih
$qbtx = mysql_query("SELECT * FROM m_kelas ".
						"WHERE kd = '$kelkd'");
$rowbtx = mysql_fetch_assoc($qbtx);
$btx_kelas = balikin($rowbtx['kelas']);

echo '<strong>'.$btx_kelas.'</strong>, ';


//terpilih
$qprgx = mysql_query("SELECT * FROM m_keahlian ".
			"WHERE kd = '$keahkd'");
$rowprgx = mysql_fetch_assoc($qprgx);
$prgx_kd = nosql($rowprgx['kd']);
$prgx_prog = balikin($rowprgx['program']);
$prgx_keah = "$prgx_prog";



//terpilih
$qprgx2 = mysql_query("SELECT * FROM m_keahlian_kompetensi ".
			"WHERE kd = '$kompkd'");
$rowprgx2 = mysql_fetch_assoc($qprgx2);
$prgx2_prog = balikin($rowprgx2['kompetensi']);



echo 'Program Keahlian :
<strong>'.$prgx_keah.'</strong>,

Kompetensi Keahlian :
<strong>'.$prgx2_prog.'</strong>
</td>
</tr>
</table>';

echo '<table bgcolor="'.$warna02.'" width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
<td>
Semester : ';

echo "<select name=\"smt\" onChange=\"MM_jumpMenu('self',this,0)\">";

//terpilih
$qstx = mysql_query("SELECT * FROM m_smt ".
						"WHERE kd = '$smtkd'");
$rowstx = mysql_fetch_assoc($qstx);
$stx_kd = nosql($rowstx['kd']);
$stx_smt = nosql($rowstx['smt']);

echo '<option value="'.$stx_kd.'">'.$stx_smt.'</option>';

$qst = mysql_query("SELECT * FROM m_smt ".
						"WHERE kd <> '$smtkd' ".
						"ORDER BY smt ASC");
$rowst = mysql_fetch_assoc($qst);

do
	{
	$st_kd = nosql($rowst['kd']);
	$st_smt = nosql($rowst['smt']);

	echo '<option value="'.$filenya.'?tapelkd='.$tapelkd.'&kelkd='.$kelkd.'&keahkd='.$keahkd.'&kompkd='.$kompkd.'&smtkd='.$st_kd.'">'.$st_smt.'</option>';
	}
while ($rowst = mysql_fetch_assoc($qst));

echo '</select>, 



Mata Pelajaran : ';
echo "<select name=\"mapel\" onChange=\"MM_jumpMenu('self',this,0)\">";

//terpilih
$qstdx = mysql_query("SELECT m_prog_pddkn.*, m_prog_pddkn.kd AS mpkd, m_prog_pddkn_jns.* ".
						"FROM m_prog_pddkn, m_prog_pddkn_jns ".
						"WHERE m_prog_pddkn.kd_jenis = m_prog_pddkn_jns.kd ".
						"AND m_prog_pddkn.kd = '$progkd'");
$rowstdx = mysql_fetch_assoc($qstdx);
$stdx_kd = nosql($rowstdx['mpkd']);
$stdx_pel = balikin($rowstdx['prog_pddkn']);
$stdx_jns = nosql($rowstdx['jenis']);

echo '<option value="'.$stdx_kd.'">'.$stdx_jns.' --> '.$stdx_pel.'</option>';

//daftar
$qstd = mysql_query("SELECT m_prog_pddkn.*, m_prog_pddkn.kd AS mpkd, ".
						"m_prog_pddkn_kelas.*, m_prog_pddkn_jns.* ".
						"FROM m_prog_pddkn, m_prog_pddkn_kelas, m_prog_pddkn_jns ".
						"WHERE m_prog_pddkn_kelas.kd_prog_pddkn = m_prog_pddkn.kd ".
						"AND m_prog_pddkn.kd_jenis = m_prog_pddkn_jns.kd ".
						"AND m_prog_pddkn_kelas.kd_tapel = '$tapelkd' ".
						"AND m_prog_pddkn_kelas.kd_kelas = '$kelkd' ".
						"AND m_prog_pddkn_kelas.kd_keahlian = '$keahkd' ".
						"AND m_prog_pddkn_kelas.kd_keahlian_kompetensi = '$kompkd' ".
						"AND m_prog_pddkn_kelas.kd <> '$progkd' ".
						"ORDER BY round(m_prog_pddkn_jns.no) ASC, ".
						"round(m_prog_pddkn.no) ASC, ".
						"round(m_prog_pddkn.no_sub) ASC");
$rowstd = mysql_fetch_assoc($qstd);


do
	{
	$std_kd = nosql($rowstd['mpkd']);
	$std_pel = balikin2($rowstd['prog_pddkn']);
	$std_jenis = balikin2($rowstd['jenis']);

	echo '<option value="'.$filenya.'?tapelkd='.$tapelkd.'&kelkd='.$kelkd.'&keahkd='.$keahkd.'&kompkd='.$kompkd.'&smtkd='.$smtkd.'&progkd='.$std_kd.'">'.$std_jenis.' --> '.$std_pel.'</option>';
	}
while ($rowstd = mysql_fetch_assoc($qstd));

echo '</select>
<input name="tapelkd" type="hidden" value="'.$tapelkd.'">
<input name="smtkd" type="hidden" value="'.$smtkd.'">
<input name="kelkd" type="hidden" value="'.$kelkd.'">
<input name="keahkd" type="hidden" value="'.$keahkd.'">
<input name="kompkd" type="hidden" value="'.$kompkd.'">
<input name="progkd" type="hidden" value="'.$progkd.'">
</td>
</tr>
</table>';

//nek drg
if (empty($smtkd))
	{
	echo '<p>
	<b>
	<font color="#FF0000"><strong>SEMESTER Belum Dipilih...!</strong></font>
	</b>
	</p>';
	}

else if (empty($progkd))
	{
	echo '<p>
	<b>
	<font color="#FF0000"><strong>SEMESTER Belum Dipilih...!</strong></font>
	</b>
	</p>';
	}

else
	{
	//query
	$qkui = mysql_query("SELECT m_pegawai.* ".
							"FROM m_guru, m_guru_prog_pddkn, m_pegawai ".
							"WHERE m_guru_prog_pddkn.kd_guru = m_guru.kd ".
							"AND m_guru.kd_pegawai = m_pegawai.kd ".
							"AND m_guru_prog_pddkn.kd_prog_pddkn = '$progkd' ".
							"AND m_guru.kd_tapel = '$tapelkd' ".
							"AND m_guru.kd_kelas = '$kelkd'");
	$rkui = mysql_fetch_assoc($qkui);
	$kui_nip = nosql($rkui['nip']);
	$kui_nama = balikin($rkui['nama']);
	
	echo '<p>
	Guru : <b>'.$kui_nip.'. '.$kui_nama.'</b>
	</p>
	
	<p>
	<table width="500" border="1" cellpadding="3" cellspacing="0">
	<tr valign="top" bgcolor="'.$warnaheader.'">
	<td width="5"><strong><font color="'.$warnatext.'">No.</font></strong></td>
	<td><strong><font color="'.$warnatext.'">Pernyataan</font></strong></td>
	<td><strong><font color="'.$warnatext.'">Nilai</font></strong></td>
	</tr>';

	//query
	$q = mysql_query("SELECT * FROM m_sikap_dirisendiri ".
							"ORDER BY round(no) ASC");
	$row = mysql_fetch_assoc($q);
	$total = mysql_num_rows($q);

	
	if ($total != 0)
		{
		do
			{
			if ($warna_set ==0)
				{
				$warna = $warna01;
				$warna_set = 1;
				}
			else
				{
				$warna = $warna02;
				$warna_set = 0;
				}

			$nomer = $nomer + 1;
			$i_kd = nosql($row['kd']);
			$i_no = nosql($row['no']);
			$i_nama = balikin($row['nama']);



			echo "<tr valign=\"top\" bgcolor=\"$warna\" onmouseover=\"this.bgColor='$warnaover';\" onmouseout=\"this.bgColor='$warna';\">";
			echo '<td>'.$i_no.'.</td>
			<td>'.$i_nama.'</td>
			<td>
			<input name="pilkd'.$nomer.'" type="hidden" value="'.$i_kd.'">
			<select name="pil'.$nomer.'">
			<option value="" selected></option>
			<option value="1">Tidak Pernah</option>
			<option value="2">Kadang - kadang</option>
			<option value="3">Sering</option>
			<option value="4">Selalu</option>
			</select>
			</td>
			</tr>';
			}
		while ($row = mysql_fetch_assoc($q));
		}

	echo '</table>';
	

	//last update
	$qku = mysql_query("SELECT * FROM siswa_sikap_dirisendiri ".
							"WHERE kd_tapel = '$tapelkd' ".
							"AND kd_kelas = '$kelkd' ".
							"AND kd_mapel = '$progkd' ".
							"AND kd_siswa = '$kd2_session'");
	$rku = mysql_fetch_assoc($qku);
	$ku_tgl = $rku['tgl'];

	
	echo '<input name="jml" type="hidden" value="'.$total.'">
	<input name="btnSMP" type="submit" value="SIMPAN">
	[Kiriman terakhi : <b>'.$ku_tgl.'</b>].
	</p>';
	}

echo '</form>
<br>
<br>
<br>';
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//isi
$isi = ob_get_contents();
ob_end_clean();

require("../../inc/niltpl.php");



//diskonek
xfree($qbw);
xclose($koneksi);
exit();
?>