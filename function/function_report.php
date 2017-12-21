<?php
  function search_kesesuaian()
  {
    include "koneksiin.php";
    $query = "SELECT kode_area,
    COUNT(if(kesesuaian_nama = 1, kesesuaian_nama, null)) as sama_dengan_rekening,
    COUNT(if(kesesuaian_nama = 2, kesesuaian_nama, null)) as pemilik_rumah_baru,
    COUNT(if(kesesuaian_nama = 3, kesesuaian_nama, null)) as penyewa,
    COUNT(if(kesesuaian_nama = 4, kesesuaian_nama, null)) as orang_lain,
    (SUM(kesesuaian_nama=1) + SUM(kesesuaian_nama=2) + SUM(kesesuaian_nama=3) + SUM(kesesuaian_nama=4)) as 'total'
    FROM ttm_call INNER JOIN ttm_pengguna ON ttm_call.id_pengguna = ttm_pengguna.id_pengguna
    GROUP BY kode_area";
    //echo $query;
    $result = mysql_query($query);
    while ($rows = mysql_fetch_array($result)) {
      $data[] = $rows;
    }
    return $data;
  }

  function search_status()
  {
    include "koneksiin.php";
    $query = "SELECT kode_area,
    COUNT(if(status_bayar = 1, status_bayar, null)) as sudah_bayar,
    COUNT(if(status_bayar = 0, status_bayar, null)) as belum_bayar,
    (SUM(status_bayar=1) + SUM(status_bayar=0)) as 'total'
    FROM ttm_call INNER JOIN ttm_pengguna ON ttm_call.id_pengguna = ttm_pengguna.id_pengguna
    GROUP BY kode_area";
    //echo $query;
    $result = mysql_query($query);
    while ($rows = mysql_fetch_array($result)) {
      $data[] = $rows;
    }
    return $data;
  }

   function search_kesediaan()
  {
    include "koneksiin.php";
    $query = "SELECT kode_area, 
    COUNT(if(kesediaan = 1, kesediaan, null)) as bersedia,
    COUNT(if(kesediaan = 2, kesediaan, null)) as menyusul,
    COUNT(if(kesediaan = 3, kesediaan, null)) as dihubungi,
    COUNT(if(kesediaan = 4, kesediaan, null)) as tdk_bersedia,
    (SUM(kesediaan=1) + SUM(kesediaan=2) + SUM(kesediaan=3) + SUM(kesediaan=4)) as 'total'
    FROM ttm_call INNER JOIN ttm_pengguna ON ttm_call.id_pengguna = ttm_pengguna.id_pengguna
    GROUP BY kode_area";
    //echo $query;
    $result = mysql_query($query);
    while ($rows = mysql_fetch_array($result)) {
      $data[] = $rows;
    }
    return $data;
  }

  function search_identitas()
  {
    include "koneksiin.php";
    $query = "SELECT kode_area,
    COUNT(if(jenis_id = 1, jenis_id, null)) as KTP,
    COUNT(if(jenis_id = 2, jenis_id, null)) as SIM,
    COUNT(if(jenis_id = 3, jenis_id, null)) as PASPOR,
    COUNT(if(jenis_id = 4, jenis_id, null)) as TDK_ADA,
    (SUM(jenis_id=1) + SUM(jenis_id=2) + SUM(jenis_id=3) + SUM(jenis_id=4)) as 'total'
    FROM ttm_call INNER JOIN ttm_pengguna ON ttm_call.id_pengguna = ttm_pengguna.id_pengguna
    GROUP BY kode_area";
    //echo $query;
    $result = mysql_query($query);
    while ($rows = mysql_fetch_array($result)) {
      $data[] = $rows;
    }
    return $data;
  }


  ?>