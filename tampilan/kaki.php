<?php
/*
File: kaki.php
Fungsi: Mengatur Tampilan bagian bawah
Auth: ShowCheap
*/

?>
<script type='text/javascript'>
    function about(){
        alert("Ruter Version <?php echo getVersion(); ?>\nPerpustakaan <?php echo get_sistem("Nama"); ?>\n\nProgram By: Silviana Sipahelut\nDedicated To: Rumah Terang Dipatiukur\nVisit: www.silvianasipahelut.net\n\nCopyright 2012 Alright Reserved");
    }
</script>
</div>
<div id='copyright' onclick='about()' title='Tentang Aplikasi Ini (Click Here!!)'>Copyright &copy; <?php echo date('Y'); ?> Silviana Sipahelut &trade;</div>
</body>
</html>