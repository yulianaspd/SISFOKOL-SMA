<?php
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
/////// SISFOKOL_SMA_v5.0_(PernahJaya)                          ///////
/////// (Sistem Informasi Sekolah untuk SMA)                    ///////
///////////////////////////////////////////////////////////////////////
/////// Dibuat oleh :                                           ///////
/////// Agus Muhajir, S.Kom                                     ///////
/////// URL 	:                                               ///////
///////     * http://omahbiasawae.com/                          ///////
///////     * http://sisfokol.wordpress.com/                    ///////
///////     * http://hajirodeon.wordpress.com/                  ///////
///////     * http://yahoogroup.com/groups/sisfokol/            ///////
///////     * http://yahoogroup.com/groups/linuxbiasawae/       ///////
/////// E-Mail	:                                               ///////
///////     * hajirodeon@yahoo.com                              ///////
///////     * hajirodeon@gmail.com                              ///////
/////// HP/SMS/WA : 081-829-88-54                               ///////
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////



//nilai
$maine = "$sumber/admsw/index.php";


//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<table bgcolor="#E4D6CC" width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
<td>';
//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//home //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<a href="'.$maine.'" title="Home" class="menuku"><strong>Home</strong>&nbsp;&nbsp;</A> | ';
//home //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//setting ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" class="menuku" data-flexmenu="flexmenu1"><strong>SETTING</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu1" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/admsw/s/pass.php" title="Ganti Password">Ganti Password</a>
</LI>
<LI>
<a href="'.$sumber.'/admsw/s/profil.php" title="Edit Profil">Edit Profil</a>
</LI>
</UL>';
//setting ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






//pelanggaran//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<a href="'.$sumber.'/admsw/d/pelanggaran.php" title="Data Pelanggaran" class="menuku"><strong>PELANGGARAN</strong>&nbsp;&nbsp;</a> | ';
//pelanggaran///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






//prestasi //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<a href="'.$sumber.'/admsw/d/prestasi.php" title="Data Prestasi" class="menuku"><strong>PRESTASI</strong>&nbsp;&nbsp;</a> | ';
//prestasi ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







//jejaring sosial////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<a href="'.$sumber.'/janissari/index.php" title="E-Network" class="menuku"><strong>E-Network</strong>&nbsp;&nbsp;</A> | ';
//jejaring sosial ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







//tabungan////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<a href="'.$sumber.'/admsw/d/tabungan.php" title="TABUNGAN" class="menuku"><strong>TABUNGAN</strong>&nbsp;&nbsp;</A> | ';
//tabungan ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////









//perpustakaan //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" data-flexmenu="flexmenu27" class="menuku"><strong>PERPUSTAKAAN</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu27" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/admsw/p/absensi.php" title="Absensi Kunjungan">Absensi Kunjungan</a>
</LI>
<LI>
<a href="'.$sumber.'/admsw/p/pinjam_sedang.php" title="Sedang Pinjam">Sedang Pinjam</a>
</LI>
<LI>
<a href="'.$sumber.'/admsw/p/pinjam_pernah.php" title="Pernah Pinjam">Pernah Pinjam</a>
</LI>
<LI>
<a href="'.$sumber.'/admsw/p/koleksi_buku.php" title="Koleksi Buku">Koleksi Buku</a>
</LI>
<LI>
<a href="'.$sumber.'/admsw/p/koleksi_majalah.php" title="Koleksi Majalah">Koleksi Majalah</a>
</LI>
<LI>
<a href="'.$sumber.'/admsw/p/koleksi_cd.php" title="Koleksi CD">Koleksi CD</a>
</LI>
</UL>';
//perpustakaan //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//logout ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="'.$sumber.'/logout.php" title="Logout / KELUAR" class="menuku"><strong>LogOut</strong></A>
</td>
</tr>
</table>';
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>