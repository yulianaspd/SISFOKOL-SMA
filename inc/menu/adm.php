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
$maine = "$sumber/adm/index.php";


//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<table bgcolor="#E4D6CC" width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
<td>';
//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//home //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<a href="'.$maine.'" title="Home" class="menuku"><strong>HOME</strong>&nbsp;&nbsp;</a> | ';
//home //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//setting ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" class="menuku" data-flexmenu="flexmenu1"><strong>SETTING</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu1" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/adm/s/pass.php" title="Ganti Password">Ganti Password</a>
</LI>
<LI>
<a href="'.$sumber.'/adm/s/sekolah.php" title="Set Sekolah">Set Sekolah</a>
</LI>
<LI>
<a href="http://omahbiasawae.com/user_sisfokol/" target="_blank" title="Daftarkan Pengguna SISFOKOL">Daftarkan Pengguna SISFOKOL</a>
</LI>

<LI>
<a href="'.$sumber.'/adm/s/reset_pass.php" title="Reset Password">Reset Password</a>
</LI>


<LI>
<a href="'.$sumber.'/adm/s/ganti_username.php" title="Ganti Username">Ganti Username</a>
</LI>
</UL>';
//setting ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






//master ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" class="menuku" data-flexmenu="flexmenu27"><strong>MASTER</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu27" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/adm/m/pegawai.php" title="Pegawai">Pegawai</a>
</LI>
</UL>';
//master ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






//cp ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" class="menuku" data-flexmenu="flexmenu13"><strong>COMPANY PROFILE</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu13" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/adm/cp/menu.php" title="Data Menu">Data Menu</a>
</LI>
<LI>
<a href="'.$sumber.'/adm/cp/submenu.php" title="Data SubMenu">Data SubMenu</a>
</LI>
<LI>
<a href="'.$sumber.'/adm/cp/artikel.php" title="Data Artikel">Data Artikel</a>
</LI>
<LI>
<a href="'.$sumber.'/adm/cp/headline.php" title="Headline">Headline</a>
</LI>
<LI>
<a href="'.$sumber.'/adm/cp/polling.php" title="Data Polling">Data Polling</a>
</LI>
<LI>
<a href="'.$sumber.'/adm/cp/bukutamu.php" title="Buku Tamu">Buku Tamu</a>
</LI>
<LI>
<a href="'.$sumber.'/adm/cp/komentar.php" title="Komentar">Komentar</a>
</LI>
</UL>';
//cp ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////









//logout ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="'.$sumber.'/logout.php" class="menuku" title="Logout / KELUAR"><strong>LogOut</strong></A>
</td>
</tr>
</table>';
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
