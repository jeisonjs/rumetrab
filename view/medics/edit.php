<?php include_once __DIR__ . '/../partials/head.php'; ?>

<body>
  <div class="wrapper ">
    <?php include_once __DIR__ . '/../partials/sidebar.php'; ?>
    <div class="main-panel">
      <?php include_once __DIR__ . '/../partials/navbar.php'; ?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Registro de Médico Tradicional</h5>
                <p class="card-category">
                  Modificando Registro de Médico Tradicional
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <form id="frm-Registro" action="?c=Registro&a=Guardar" method="post" 
                data-toggle="validffator" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="Seq_Registro" value="<?php echo $alm->Seq_Registro; ?>" />

                        <!-- Sección: Ubicación -->
                        <div class="card">
                          <div class="card-header">
                            <h5 class="mb-0 title-form">
                              Ubicación
                            </h5>
                          </div>
                          <div class="card-body">

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="CboDepartamento">Departamento:</label>
                                <select id="CboDepartamento" name="Departamento_Seq" class="custom-select mr-sm-2" required>
                                  <option value="" selected>Seleccione Departamento...</option>
                                  <option <?php echo $alm->Departamento_Seq ==80 ? 'selected' : ''; ?> value="80">BENI / TRINIDAD</option>
                                  <option <?php echo $alm->Departamento_Seq ==10 ? 'selected' : ''; ?> value="10">CHUQUISACA / SUCRE</option>
                                  <option <?php echo $alm->Departamento_Seq ==30 ? 'selected' : ''; ?> value="30">COCHABAMBA</option>
                                  <option <?php echo $alm->Departamento_Seq ==20 ? 'selected' : ''; ?> value="20">LA PAZ</option>
                                  <option <?php echo $alm->Departamento_Seq ==40 ? 'selected' : ''; ?> value="40">ORURO</option>
                                  <option <?php echo $alm->Departamento_Seq ==90 ? 'selected' : ''; ?> value="90">PANDO / COBIJA</option>
                                  <option <?php echo $alm->Departamento_Seq ==50 ? 'selected' : ''; ?> value="50">POTOSÍ</option>
                                  <option <?php echo $alm->Departamento_Seq ==70 ? 'selected' : ''; ?> value="70">SANTA CRUZ</option>
                                  <option <?php echo $alm->Departamento_Seq ==60 ? 'selected' : ''; ?> value="60">TARIJA</option> 
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="CboProvincia">Provincia:</label>
                                <select id="CboProvincia" name="Provincia_Seq" class="custom-select mr-sm-2">
                                  <option value="" selected>Seleccione Provincia...</option>
                                  <option <?php echo $alm->Provincia_Seq ==  1   ? 'selected' : ''; ?> value=" 1  "> ITENEZ   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  2   ? 'selected' : ''; ?> value=" 2  "> YACUMA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  3   ? 'selected' : ''; ?> value=" 3  "> VACA DIEZ  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  4   ? 'selected' : ''; ?> value=" 4  "> MAMORE   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  5   ? 'selected' : ''; ?> value=" 5  "> JOSE BALLIVIAN   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  6   ? 'selected' : ''; ?> value=" 6  "> MOXOS  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  7   ? 'selected' : ''; ?> value=" 7  "> CERCADO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  8   ? 'selected' : ''; ?> value=" 8  "> NOR CINTI  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  9   ? 'selected' : ''; ?> value=" 9  "> SUD CINTI  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  10    ? 'selected' : ''; ?> value=" 10   "> TOMINA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  11    ? 'selected' : ''; ?> value=" 11   "> LUIS CALVO   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  12    ? 'selected' : ''; ?> value=" 12   "> ZUDAÑES  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  13    ? 'selected' : ''; ?> value=" 13   "> HERNANDO SILES   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  14    ? 'selected' : ''; ?> value=" 14   "> OROPEZA  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  15    ? 'selected' : ''; ?> value=" 15   "> YAMPARAEZ  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  16    ? 'selected' : ''; ?> value=" 16   "> AZURDUY  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  17    ? 'selected' : ''; ?> value=" 17   "> BELISARIO BOETO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  18    ? 'selected' : ''; ?> value=" 18   "> CERCADO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  19    ? 'selected' : ''; ?> value=" 19   "> NARCISO CAMPERO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  20    ? 'selected' : ''; ?> value=" 20   "> AYOPAYA  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  21    ? 'selected' : ''; ?> value=" 21   "> ESTEBAN ARCE   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  22    ? 'selected' : ''; ?> value=" 22   "> ARANI  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  23    ? 'selected' : ''; ?> value=" 23   "> ARQUE  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  24    ? 'selected' : ''; ?> value=" 24   "> CAPINOTA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  25    ? 'selected' : ''; ?> value=" 25   "> GERMAN JORDAN  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  26    ? 'selected' : ''; ?> value=" 26   "> QUILLACOLLO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  27    ? 'selected' : ''; ?> value=" 27   "> CHAPARE  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  28    ? 'selected' : ''; ?> value=" 28   "> TAPACARI   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  29    ? 'selected' : ''; ?> value=" 29   "> CARRASCO   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  30    ? 'selected' : ''; ?> value=" 30   "> MIZQUE   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  31    ? 'selected' : ''; ?> value=" 31   "> PUNATA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  32    ? 'selected' : ''; ?> value=" 32   "> BOLIVAR  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  33    ? 'selected' : ''; ?> value=" 33   "> TIRAQUE  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  34    ? 'selected' : ''; ?> value=" 34   "> CAMPERO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  35    ? 'selected' : ''; ?> value=" 35   "> PEDRO DOMINGO MURILLO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  36    ? 'selected' : ''; ?> value=" 36   "> OMASUYOS   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  37    ? 'selected' : ''; ?> value=" 37   "> PACAJES  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  38    ? 'selected' : ''; ?> value=" 38   "> ELIODORO CAMACHO   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  39    ? 'selected' : ''; ?> value=" 39   "> MUÑECAS  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  40    ? 'selected' : ''; ?> value=" 40   "> LARECAJA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  41    ? 'selected' : ''; ?> value=" 41   "> FRANZ TAMAYO   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  42    ? 'selected' : ''; ?> value=" 42   "> LOAYZA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  43    ? 'selected' : ''; ?> value=" 43   "> INQUISIVI  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  44    ? 'selected' : ''; ?> value=" 44   "> SUD YUNGAS   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  45    ? 'selected' : ''; ?> value=" 45   "> LOS ANDES  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  46    ? 'selected' : ''; ?> value=" 46   "> AROMA  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  47    ? 'selected' : ''; ?> value=" 47   "> NOR YUNGAS   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  48    ? 'selected' : ''; ?> value=" 48   "> ABEL ITURRALDE   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  49    ? 'selected' : ''; ?> value=" 49   "> BAUTISTA SAAVEDRA  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  50    ? 'selected' : ''; ?> value=" 50   "> MANCO KAPAC  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  51    ? 'selected' : ''; ?> value=" 51   "> GUALBERTO VILLARROEL   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  52    ? 'selected' : ''; ?> value=" 52   "> JOSE MANUEL PANDO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  53    ? 'selected' : ''; ?> value=" 53   "> CARANAVI   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  54    ? 'selected' : ''; ?> value=" 54   "> MURILLO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  55    ? 'selected' : ''; ?> value=" 55   "> CAMACHO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  56    ? 'selected' : ''; ?> value=" 56   "> INGAVI   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  57    ? 'selected' : ''; ?> value=" 57   "> CERCADO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  58    ? 'selected' : ''; ?> value=" 58   "> SUD CARANGAS   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  59    ? 'selected' : ''; ?> value=" 59   "> POOPO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  60    ? 'selected' : ''; ?> value=" 60   "> PUERTO DE MEJILLONES   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  61    ? 'selected' : ''; ?> value=" 61   "> EDUARDO AVAROA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  62    ? 'selected' : ''; ?> value=" 62   "> ATAHUALLPA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  63    ? 'selected' : ''; ?> value=" 63   "> CARANGAS   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  64    ? 'selected' : ''; ?> value=" 64   "> LITORAL DE ATACAMA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  65    ? 'selected' : ''; ?> value=" 65   "> SAJAMA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  66    ? 'selected' : ''; ?> value=" 66   "> TOMAS BARRON   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  67    ? 'selected' : ''; ?> value=" 67   "> PANTALEON DALENCE  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  68    ? 'selected' : ''; ?> value=" 68   "> LADISLAO CABRERA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  69    ? 'selected' : ''; ?> value=" 69   "> SEBASTIAN PAGADOR  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  70    ? 'selected' : ''; ?> value=" 70   "> NOR CARANGAS   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  71    ? 'selected' : ''; ?> value=" 71   "> SAUCARI  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  72    ? 'selected' : ''; ?> value=" 72   "> SAN PEDRO DE TOTORA  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  73    ? 'selected' : ''; ?> value=" 73   "> NICOLAS SUAREZ   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  74    ? 'selected' : ''; ?> value=" 74   "> MADRE DE DIOS  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  75    ? 'selected' : ''; ?> value=" 75   "> MANURIPI   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  76    ? 'selected' : ''; ?> value=" 76   "> ABUNA  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  77    ? 'selected' : ''; ?> value=" 77   "> FEDERICO ROMAN   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  78    ? 'selected' : ''; ?> value=" 78   "> BERNARDINO BILBAO RIOJA  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  79    ? 'selected' : ''; ?> value=" 79   "> SUR CHICHAS  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  80    ? 'selected' : ''; ?> value=" 80   "> TOMAS FRIAS  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  81    ? 'selected' : ''; ?> value=" 81   "> CORNELIO SAAVEDRA  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  82    ? 'selected' : ''; ?> value=" 82   "> JOSE MARIA LINARES   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  83    ? 'selected' : ''; ?> value=" 83   "> ALONSO DE IBAÑEZ   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  84    ? 'selected' : ''; ?> value=" 84   "> RAFAEL BUSTILLO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  85    ? 'selected' : ''; ?> value=" 85   "> NOR LIPEZ  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  86    ? 'selected' : ''; ?> value=" 86   "> CHAYANTA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  87    ? 'selected' : ''; ?> value=" 87   "> SUR LIPEZ  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  88    ? 'selected' : ''; ?> value=" 88   "> DANIEL CAMPOS  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  89    ? 'selected' : ''; ?> value=" 89   "> ANTONIO QUIJARRO   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  90    ? 'selected' : ''; ?> value=" 90   "> CHARCAS  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  91    ? 'selected' : ''; ?> value=" 91   "> MODESTO OMISTE   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  92    ? 'selected' : ''; ?> value=" 92   "> NOR CHICHAS  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  93    ? 'selected' : ''; ?> value=" 93   "> ENRIQUE BALDIVIESO   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  94    ? 'selected' : ''; ?> value=" 94   "> ANDRES IBAÑEZ  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  95    ? 'selected' : ''; ?> value=" 95   "> IGNACIO WARNES   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  96    ? 'selected' : ''; ?> value=" 96   "> JOSE MIGUEL DE VELASCO   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  97    ? 'selected' : ''; ?> value=" 97   "> ICHILO   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  98    ? 'selected' : ''; ?> value=" 98   "> CHIQUITOS  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  99    ? 'selected' : ''; ?> value=" 99   "> SARA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  100   ? 'selected' : ''; ?> value=" 100  "> CORDILLERA   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  101   ? 'selected' : ''; ?> value=" 101  "> VALLEGRANDE  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  102   ? 'selected' : ''; ?> value=" 102  "> FLORIDA  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  103   ? 'selected' : ''; ?> value=" 103  "> OBISPO SANTISTEVAN   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  104   ? 'selected' : ''; ?> value=" 104  "> ÑUFLO DE CHAVEZ  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  105   ? 'selected' : ''; ?> value=" 105  "> ANGEL SANDOVAL   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  106   ? 'selected' : ''; ?> value=" 106  "> MANUEL MARIA CABALLERO   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  107   ? 'selected' : ''; ?> value=" 107  "> GERMAN BUSH  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  108   ? 'selected' : ''; ?> value=" 108  "> GUARAYOS   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  109   ? 'selected' : ''; ?> value=" 109  "> WARNES   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  110   ? 'selected' : ''; ?> value=" 110  "> VELASCO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  111   ? 'selected' : ''; ?> value=" 111  "> CERCADO  </option>
                                  <option <?php echo $alm->Provincia_Seq ==  112   ? 'selected' : ''; ?> value=" 112  "> GRAN CHACO   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  113   ? 'selected' : ''; ?> value=" 113  "> BURNET O`CONOR   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  114   ? 'selected' : ''; ?> value=" 114  "> MENDEZ   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  115   ? 'selected' : ''; ?> value=" 115  "> AVILES   </option>
                                  <option <?php echo $alm->Provincia_Seq ==  116   ? 'selected' : ''; ?> value=" 116  "> ANICETO  ARCE  </option>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="CboMunicipios">Municipio:</label>
                                <select id="CboMunicipios" name="Municipio_Seq" class="custom-select mr-sm-2">
                                  <option value="0" selected>Seleccione Municipio...</option>
                                  <option <?php echo $alm->Municipio_Seq == 1   ? 'selected' : ''; ?> value=" 1  "> BAURES   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  2   ? 'selected' : ''; ?> value=" 2  "> HUACARAJE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  3   ? 'selected' : ''; ?> value=" 3  "> MAGDALENA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  4   ? 'selected' : ''; ?> value=" 4  "> EXALTACION   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  5   ? 'selected' : ''; ?> value=" 5  "> SANTA ANA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  6   ? 'selected' : ''; ?> value=" 6  "> GUAYARAMERIN   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  7   ? 'selected' : ''; ?> value=" 7  "> RIBERALTA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  8   ? 'selected' : ''; ?> value=" 8  "> PUERTO SILES   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  9   ? 'selected' : ''; ?> value=" 9  "> SAN JOAQUIN  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  10    ? 'selected' : ''; ?> value=" 10   "> SAN RAMON  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  11    ? 'selected' : ''; ?> value=" 11   "> REYES  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  12    ? 'selected' : ''; ?> value=" 12   "> RURRENABAQUE   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  13    ? 'selected' : ''; ?> value=" 13   "> SAN BORJA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  14    ? 'selected' : ''; ?> value=" 14   "> SANTA ROSA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  15    ? 'selected' : ''; ?> value=" 15   "> SAN IGNACIO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  16    ? 'selected' : ''; ?> value=" 16   "> SAN JAVIER   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  17    ? 'selected' : ''; ?> value=" 17   "> TRINIDAD   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  18    ? 'selected' : ''; ?> value=" 18   "> CAMARGO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  19    ? 'selected' : ''; ?> value=" 19   "> INCAHUASI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  20    ? 'selected' : ''; ?> value=" 20   "> SAN LUCAS  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  21    ? 'selected' : ''; ?> value=" 21   "> VILLA CHARCAS  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  22    ? 'selected' : ''; ?> value=" 22   "> CAMATAQUI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  23    ? 'selected' : ''; ?> value=" 23   "> CULPINA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  24    ? 'selected' : ''; ?> value=" 24   "> LAS CARRERAS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  25    ? 'selected' : ''; ?> value=" 25   "> EL VILLAR  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  26    ? 'selected' : ''; ?> value=" 26   "> PADILLA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  27    ? 'selected' : ''; ?> value=" 27   "> SOPACHUY   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  28    ? 'selected' : ''; ?> value=" 28   "> TOMINA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  29    ? 'selected' : ''; ?> value=" 29   "> VILLA ALCALA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  30    ? 'selected' : ''; ?> value=" 30   "> HUACAYA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  31    ? 'selected' : ''; ?> value=" 31   "> MACHERETI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  32    ? 'selected' : ''; ?> value=" 32   "> VILLA VACA GUZMAN  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  33    ? 'selected' : ''; ?> value=" 33   "> ICLA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  34    ? 'selected' : ''; ?> value=" 34   "> PRESTO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  35    ? 'selected' : ''; ?> value=" 35   "> VILLA MOJOCOYA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  36    ? 'selected' : ''; ?> value=" 36   "> VILLA ZUDAÑEZ  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  37    ? 'selected' : ''; ?> value=" 37   "> MONTEAGUDO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  38    ? 'selected' : ''; ?> value=" 38   "> SAN PABLO DE HUACARETA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  39    ? 'selected' : ''; ?> value=" 39   "> SUCRE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  40    ? 'selected' : ''; ?> value=" 40   "> YOTALA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  41    ? 'selected' : ''; ?> value=" 41   "> POROMA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  42    ? 'selected' : ''; ?> value=" 42   "> TARABUCO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  43    ? 'selected' : ''; ?> value=" 43   "> YAMPARAEZ  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  44    ? 'selected' : ''; ?> value=" 44   "> TARVITA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  45    ? 'selected' : ''; ?> value=" 45   "> VILLA AZURDUY  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  46    ? 'selected' : ''; ?> value=" 46   "> VILLA SERRANO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  47    ? 'selected' : ''; ?> value=" 47   "> COCHABAMBA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  48    ? 'selected' : ''; ?> value=" 48   "> INDEPENDENCIA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  49    ? 'selected' : ''; ?> value=" 49   "> MOROCHATA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  50    ? 'selected' : ''; ?> value=" 50   "> COCAPATA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  51    ? 'selected' : ''; ?> value=" 51   "> ANZALDO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  52    ? 'selected' : ''; ?> value=" 52   "> ARBIETO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  53    ? 'selected' : ''; ?> value=" 53   "> TARATA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  54    ? 'selected' : ''; ?> value=" 54   "> ARANI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  55    ? 'selected' : ''; ?> value=" 55   "> VACAS  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  56    ? 'selected' : ''; ?> value=" 56   "> ARQUE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  57    ? 'selected' : ''; ?> value=" 57   "> TACOPAYA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  58    ? 'selected' : ''; ?> value=" 58   "> CAPINOTA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  59    ? 'selected' : ''; ?> value=" 59   "> SANTIVAÑEZ   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  60    ? 'selected' : ''; ?> value=" 60   "> SICAYA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  61    ? 'selected' : ''; ?> value=" 61   "> CLIZA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  62    ? 'selected' : ''; ?> value=" 62   "> TOCO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  63    ? 'selected' : ''; ?> value=" 63   "> TOLATA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  64    ? 'selected' : ''; ?> value=" 64   "> COLCAPIRHUA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  65    ? 'selected' : ''; ?> value=" 65   "> QUILLACOLLO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  66    ? 'selected' : ''; ?> value=" 66   "> SIPE SIPE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  67    ? 'selected' : ''; ?> value=" 67   "> TIQUIPAYA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  68    ? 'selected' : ''; ?> value=" 68   "> VINTO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  69    ? 'selected' : ''; ?> value=" 69   "> COLOMI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  70    ? 'selected' : ''; ?> value=" 70   "> SACABA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  71    ? 'selected' : ''; ?> value=" 71   "> VILLA TUNARI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  72    ? 'selected' : ''; ?> value=" 72   "> TAPACARI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  73    ? 'selected' : ''; ?> value=" 73   "> CHIMORE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  74    ? 'selected' : ''; ?> value=" 74   "> ENTRE RIOS - BULO BULO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  75    ? 'selected' : ''; ?> value=" 75   "> POCONA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  76    ? 'selected' : ''; ?> value=" 76   "> POJO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  77    ? 'selected' : ''; ?> value=" 77   "> PUERTO VILLARROEL  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  78    ? 'selected' : ''; ?> value=" 78   "> TOTORA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  79    ? 'selected' : ''; ?> value=" 79   "> ALALAY   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  80    ? 'selected' : ''; ?> value=" 80   "> MIZQUE   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  81    ? 'selected' : ''; ?> value=" 81   "> VILA VILA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  82    ? 'selected' : ''; ?> value=" 82   "> CUCHUMUELA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  83    ? 'selected' : ''; ?> value=" 83   "> PUNATA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  84    ? 'selected' : ''; ?> value=" 84   "> SAN BENITO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  85    ? 'selected' : ''; ?> value=" 85   "> TACACHI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  86    ? 'selected' : ''; ?> value=" 86   "> VILLA RIVERO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  87    ? 'selected' : ''; ?> value=" 87   "> BOLIVAR  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  88    ? 'selected' : ''; ?> value=" 88   "> TIRAQUE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  89    ? 'selected' : ''; ?> value=" 89   "> SHINAHOTA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  90    ? 'selected' : ''; ?> value=" 90   "> AIQUILE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  91    ? 'selected' : ''; ?> value=" 91   "> OMEREQUE   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  92    ? 'selected' : ''; ?> value=" 92   "> PASORAPA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  93    ? 'selected' : ''; ?> value=" 93   "> ACHACACHI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  94    ? 'selected' : ''; ?> value=" 94   "> ANCORAIMES   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  95    ? 'selected' : ''; ?> value=" 95   "> arreglado  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  96    ? 'selected' : ''; ?> value=" 96   "> HUARINA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  97    ? 'selected' : ''; ?> value=" 97   "> SANTIAGO DE HUATA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  98    ? 'selected' : ''; ?> value=" 98   "> CALACOTO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  99    ? 'selected' : ''; ?> value=" 99   "> CAQUIAVIRI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  100   ? 'selected' : ''; ?> value=" 100  "> CHARAÑA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  101   ? 'selected' : ''; ?> value=" 101  "> COMANCHE   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  102   ? 'selected' : ''; ?> value=" 102  "> CORO CORO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  103   ? 'selected' : ''; ?> value=" 103  "> NAZACARA DE PACAJES  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  104   ? 'selected' : ''; ?> value=" 104  "> SANTIAGO DE CALLAPA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  105   ? 'selected' : ''; ?> value=" 105  "> arreglado  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  106   ? 'selected' : ''; ?> value=" 106  "> WALDO BALLIVIAN  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  107   ? 'selected' : ''; ?> value=" 107  "> AUCAPATA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  108   ? 'selected' : ''; ?> value=" 108  "> AYATA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  109   ? 'selected' : ''; ?> value=" 109  "> CHUMA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  110   ? 'selected' : ''; ?> value=" 110  "> COMBAYA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  111   ? 'selected' : ''; ?> value=" 111  "> GUANAY   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  112   ? 'selected' : ''; ?> value=" 112  "> arreglado  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  113   ? 'selected' : ''; ?> value=" 113  "> MAPIRI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  114   ? 'selected' : ''; ?> value=" 114  "> QUIABAYA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  115   ? 'selected' : ''; ?> value=" 115  "> SORATA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  116   ? 'selected' : ''; ?> value=" 116  "> TACACOMA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  117   ? 'selected' : ''; ?> value=" 117  "> TEOPONTE   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  118   ? 'selected' : ''; ?> value=" 118  "> arreglado  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  119   ? 'selected' : ''; ?> value=" 119  "> TIPUANI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  120   ? 'selected' : ''; ?> value=" 120  "> APOLO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  121   ? 'selected' : ''; ?> value=" 121  "> PELECHUCO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  122   ? 'selected' : ''; ?> value=" 122  "> CAIROMA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  123   ? 'selected' : ''; ?> value=" 123  "> LURIBAY  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  124   ? 'selected' : ''; ?> value=" 124  "> MALLA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  125   ? 'selected' : ''; ?> value=" 125  "> SAPAHAQUI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  126   ? 'selected' : ''; ?> value=" 126  "> YACO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  127   ? 'selected' : ''; ?> value=" 127  "> CAJUATA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  128   ? 'selected' : ''; ?> value=" 128  "> COLQUIRI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  129   ? 'selected' : ''; ?> value=" 129  "> ICHOCA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  130   ? 'selected' : ''; ?> value=" 130  "> INQUISIVI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  131   ? 'selected' : ''; ?> value=" 131  "> LICOMA PAMPA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  132   ? 'selected' : ''; ?> value=" 132  "> QUIME  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  133   ? 'selected' : ''; ?> value=" 133  "> CHULUMANI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  134   ? 'selected' : ''; ?> value=" 134  "> IRUPANA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  135   ? 'selected' : ''; ?> value=" 135  "> LA ASUNTA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  136   ? 'selected' : ''; ?> value=" 136  "> PALOS BLANCOS  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  137   ? 'selected' : ''; ?> value=" 137  "> YANACACHI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  138   ? 'selected' : ''; ?> value=" 138  "> BATALLAS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  139   ? 'selected' : ''; ?> value=" 139  "> LAJA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  140   ? 'selected' : ''; ?> value=" 140  "> PUCARANI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  141   ? 'selected' : ''; ?> value=" 141  "> PUERTO PEREZ   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  142   ? 'selected' : ''; ?> value=" 142  "> AYO AYO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  143   ? 'selected' : ''; ?> value=" 143  "> CALAMARCA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  144   ? 'selected' : ''; ?> value=" 144  "> COLLANA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  145   ? 'selected' : ''; ?> value=" 145  "> COLQUENCHA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  146   ? 'selected' : ''; ?> value=" 146  "> PATACAMAYA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  147   ? 'selected' : ''; ?> value=" 147  "> SICA SICA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  148   ? 'selected' : ''; ?> value=" 148  "> UMALA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  149   ? 'selected' : ''; ?> value=" 149  "> CORIPATA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  150   ? 'selected' : ''; ?> value=" 150  "> COROICO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  151   ? 'selected' : ''; ?> value=" 151  "> IXIAMAS  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  152   ? 'selected' : ''; ?> value=" 152  "> arreglado  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  153   ? 'selected' : ''; ?> value=" 153  "> SAN BUENA VENTURA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  154   ? 'selected' : ''; ?> value=" 154  "> CURVA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  155   ? 'selected' : ''; ?> value=" 155  "> arreglado  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  156   ? 'selected' : ''; ?> value=" 156  "> GRAL. JUAN JOSE PEREZ  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  157   ? 'selected' : ''; ?> value=" 157  "> COPACABANA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  158   ? 'selected' : ''; ?> value=" 158  "> SAN PEDRO DE TIQUINA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  159   ? 'selected' : ''; ?> value=" 159  "> TITO YUPANQUI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  160   ? 'selected' : ''; ?> value=" 160  "> CHACARILLA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  161   ? 'selected' : ''; ?> value=" 161  "> PAPEL PAMPA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  162   ? 'selected' : ''; ?> value=" 162  "> SAN PEDRO DE CURAHUARA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  163   ? 'selected' : ''; ?> value=" 163  "> CATACORA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  164   ? 'selected' : ''; ?> value=" 164  "> SANTIAGO DE MACHACA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  165   ? 'selected' : ''; ?> value=" 165  "> CARANAVI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  166   ? 'selected' : ''; ?> value=" 166  "> ALTO BENI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  167   ? 'selected' : ''; ?> value=" 167  "> ACHOCALLA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  168   ? 'selected' : ''; ?> value=" 168  "> EL ALTO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  169   ? 'selected' : ''; ?> value=" 169  "> LA PAZ   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  170   ? 'selected' : ''; ?> value=" 170  "> MECAPACA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  171   ? 'selected' : ''; ?> value=" 171  "> PALCA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  172   ? 'selected' : ''; ?> value=" 172  "> MOCOMOCO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  173   ? 'selected' : ''; ?> value=" 173  "> PUERTO ACOSTA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  174   ? 'selected' : ''; ?> value=" 174  "> PUERTO CARABUCO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  175   ? 'selected' : ''; ?> value=" 175  "> ESCOMA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  176   ? 'selected' : ''; ?> value=" 176  "> HUMANATA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  177   ? 'selected' : ''; ?> value=" 177  "> ANDRES DE MACHACA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  178   ? 'selected' : ''; ?> value=" 178  "> DESAGUADERO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  179   ? 'selected' : ''; ?> value=" 179  "> GUAQUI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  180   ? 'selected' : ''; ?> value=" 180  "> JESUS DE MACHACA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  181   ? 'selected' : ''; ?> value=" 181  "> TARACO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  182   ? 'selected' : ''; ?> value=" 182  "> TIHUANACO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  183   ? 'selected' : ''; ?> value=" 183  "> VIACHA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  184   ? 'selected' : ''; ?> value=" 184  "> CARACOLLO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  185   ? 'selected' : ''; ?> value=" 185  "> EL CHORO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  186   ? 'selected' : ''; ?> value=" 186  "> ORURO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  187   ? 'selected' : ''; ?> value=" 187  "> SORACACHI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  188   ? 'selected' : ''; ?> value=" 188  "> ANDAMARCA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  189   ? 'selected' : ''; ?> value=" 189  "> BELEN DE ANDAMARCA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  190   ? 'selected' : ''; ?> value=" 190  "> ANTEQUERA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  191   ? 'selected' : ''; ?> value=" 191  "> PAZÑA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  192   ? 'selected' : ''; ?> value=" 192  "> VILLA POOPO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  193   ? 'selected' : ''; ?> value=" 193  "> CARANGAS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  194   ? 'selected' : ''; ?> value=" 194  "> LA RIVERA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  195   ? 'selected' : ''; ?> value=" 195  "> TODOS SANTOS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  196   ? 'selected' : ''; ?> value=" 196  "> CHALLAPATA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  197   ? 'selected' : ''; ?> value=" 197  "> SANTUARIO DE QUILLACAS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  198   ? 'selected' : ''; ?> value=" 198  "> CHIPAYA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  199   ? 'selected' : ''; ?> value=" 199  "> COIPASA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  200   ? 'selected' : ''; ?> value=" 200  "> SABAYA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  201   ? 'selected' : ''; ?> value=" 201  "> CHOQUECOTA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  202   ? 'selected' : ''; ?> value=" 202  "> CORQUE   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  203   ? 'selected' : ''; ?> value=" 203  "> CRUZ DE MACHACAMARCA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  204   ? 'selected' : ''; ?> value=" 204  "> ESCARA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  205   ? 'selected' : ''; ?> value=" 205  "> ESMERALDA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  206   ? 'selected' : ''; ?> value=" 206  "> HUACHACALLA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  207   ? 'selected' : ''; ?> value=" 207  "> YUNGUYO DE LITORAL   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  208   ? 'selected' : ''; ?> value=" 208  "> CURAHUARA DE CARANGAS  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  209   ? 'selected' : ''; ?> value=" 209  "> TURCO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  210   ? 'selected' : ''; ?> value=" 210  "> EUCALIPTUS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  211   ? 'selected' : ''; ?> value=" 211  "> MACHACAMARCA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  212   ? 'selected' : ''; ?> value=" 212  "> VILLA HUANUNI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  213   ? 'selected' : ''; ?> value=" 213  "> PAMPA AULLAGAS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  214   ? 'selected' : ''; ?> value=" 214  "> SALINAS DE GARCI MENDOZA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  215   ? 'selected' : ''; ?> value=" 215  "> SANTIAGO DE HUARI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  216   ? 'selected' : ''; ?> value=" 216  "> SANTIAGO DE HUAYLLAMARCA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  217   ? 'selected' : ''; ?> value=" 217  "> TOLEDO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  218   ? 'selected' : ''; ?> value=" 218  "> TOTORA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  219   ? 'selected' : ''; ?> value=" 219  "> BELLA FLOR   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  220   ? 'selected' : ''; ?> value=" 220  "> BOLPEBRA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  221   ? 'selected' : ''; ?> value=" 221  "> COBIJA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  222   ? 'selected' : ''; ?> value=" 222  "> PORVENIR   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  223   ? 'selected' : ''; ?> value=" 223  "> PUETO RICO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  224   ? 'selected' : ''; ?> value=" 224  "> BLANCA FLOR  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  225   ? 'selected' : ''; ?> value=" 225  "> EL SENA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  226   ? 'selected' : ''; ?> value=" 226  "> FILADELFIA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  227   ? 'selected' : ''; ?> value=" 227  "> SAN PEDRO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  228   ? 'selected' : ''; ?> value=" 228  "> HUMAITA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  229   ? 'selected' : ''; ?> value=" 229  "> SANTA ROSA DEL ABUNA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  230   ? 'selected' : ''; ?> value=" 230  "> NUEVA ESPERANZA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  231   ? 'selected' : ''; ?> value=" 231  "> SANTOS MERCADO - RESERVA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  232   ? 'selected' : ''; ?> value=" 232  "> VILLA NUEVA - LOMA ALTA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  233   ? 'selected' : ''; ?> value=" 233  "> ACASIO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  234   ? 'selected' : ''; ?> value=" 234  "> ARAMPAMPA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  235   ? 'selected' : ''; ?> value=" 235  "> ATOCHA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  236   ? 'selected' : ''; ?> value=" 236  "> TUPIZA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  237   ? 'selected' : ''; ?> value=" 237  "> BELEN DE URMIRI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  238   ? 'selected' : ''; ?> value=" 238  "> POTOSI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  239   ? 'selected' : ''; ?> value=" 239  "> TINGUIPAYA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  240   ? 'selected' : ''; ?> value=" 240  "> VILLA DE YOCALLA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  241   ? 'selected' : ''; ?> value=" 241  "> BETANZOS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  242   ? 'selected' : ''; ?> value=" 242  "> CHAQUI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  243   ? 'selected' : ''; ?> value=" 243  "> TACOBAMBA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  244   ? 'selected' : ''; ?> value=" 244  "> CAIZA - D  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  245   ? 'selected' : ''; ?> value=" 245  "> PUNA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  246   ? 'selected' : ''; ?> value=" 246  "> CKOCHAS  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  247   ? 'selected' : ''; ?> value=" 247  "> CARIPUYO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  248   ? 'selected' : ''; ?> value=" 248  "> SACACA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  249   ? 'selected' : ''; ?> value=" 249  "> CHAYANTA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  250   ? 'selected' : ''; ?> value=" 250  "> LLALLAGUA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  251   ? 'selected' : ''; ?> value=" 251  "> UNCIA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  252   ? 'selected' : ''; ?> value=" 252  "> CHUQUIUTA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  253   ? 'selected' : ''; ?> value=" 253  "> COLCHA - K   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  254   ? 'selected' : ''; ?> value=" 254  "> SAN PEDRO DE QUEMES  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  255   ? 'selected' : ''; ?> value=" 255  "> COLQUECHACA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  256   ? 'selected' : ''; ?> value=" 256  "> OCURI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  257   ? 'selected' : ''; ?> value=" 257  "> POCOATA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  258   ? 'selected' : ''; ?> value=" 258  "> RAVELO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  259   ? 'selected' : ''; ?> value=" 259  "> MOJINETE   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  260   ? 'selected' : ''; ?> value=" 260  "> SAN ANTONIO DE ESMORUCO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  261   ? 'selected' : ''; ?> value=" 261  "> SAN PABLO DE LIPEZ   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  262   ? 'selected' : ''; ?> value=" 262  "> LLICA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  263   ? 'selected' : ''; ?> value=" 263  "> TAHUA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  264   ? 'selected' : ''; ?> value=" 264  "> PORCO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  265   ? 'selected' : ''; ?> value=" 265  "> TOMAVE   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  266   ? 'selected' : ''; ?> value=" 266  "> UYUNI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  267   ? 'selected' : ''; ?> value=" 267  "> SAN PEDRO DE BUENA VISTA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  268   ? 'selected' : ''; ?> value=" 268  "> TORO TORO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  269   ? 'selected' : ''; ?> value=" 269  "> VILLAZON   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  270   ? 'selected' : ''; ?> value=" 270  "> COTAGAITA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  271   ? 'selected' : ''; ?> value=" 271  "> VITICHI  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  272   ? 'selected' : ''; ?> value=" 272  "> SAN AGUSTIN  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  273   ? 'selected' : ''; ?> value=" 273  "> AYACUCHO - PORONGO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  274   ? 'selected' : ''; ?> value=" 274  "> COTOCA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  275   ? 'selected' : ''; ?> value=" 275  "> EL TORNO   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  276   ? 'selected' : ''; ?> value=" 276  "> LA GUARDIA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  277   ? 'selected' : ''; ?> value=" 277  "> SANTA CRUZ DE LA SIERRA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  278   ? 'selected' : ''; ?> value=" 278  "> BUENA VISTA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  279   ? 'selected' : ''; ?> value=" 279  "> SAN CARLOS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  280   ? 'selected' : ''; ?> value=" 280  "> SAN JUAN   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  281   ? 'selected' : ''; ?> value=" 281  "> YAPACANI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  282   ? 'selected' : ''; ?> value=" 282  "> PAILON   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  283   ? 'selected' : ''; ?> value=" 283  "> ROBORE   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  284   ? 'selected' : ''; ?> value=" 284  "> SAN JOSE   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  285   ? 'selected' : ''; ?> value=" 285  "> COLPA BELGICA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  286   ? 'selected' : ''; ?> value=" 286  "> PORTACHUELO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  287   ? 'selected' : ''; ?> value=" 287  "> SANTA ROSA DEL SARA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  288   ? 'selected' : ''; ?> value=" 288  "> BOYUIBE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  289   ? 'selected' : ''; ?> value=" 289  "> CABEZAS  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  290   ? 'selected' : ''; ?> value=" 290  "> CAMIRI   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  291   ? 'selected' : ''; ?> value=" 291  "> CHARAGUA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  292   ? 'selected' : ''; ?> value=" 292  "> CUEVO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  293   ? 'selected' : ''; ?> value=" 293  "> GUTIERREZ  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  294   ? 'selected' : ''; ?> value=" 294  "> LAGUNILLAS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  295   ? 'selected' : ''; ?> value=" 295  "> MORO MORO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  296   ? 'selected' : ''; ?> value=" 296  "> POSTRER VALLE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  297   ? 'selected' : ''; ?> value=" 297  "> PUCARA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  298   ? 'selected' : ''; ?> value=" 298  "> VALLEGRANDE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  299   ? 'selected' : ''; ?> value=" 299  "> MAIRA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  300   ? 'selected' : ''; ?> value=" 300  "> PAMPA GRANDE   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  301   ? 'selected' : ''; ?> value=" 301  "> QUIRUSILLAS  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  302   ? 'selected' : ''; ?> value=" 302  "> SAMAIPATA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  303   ? 'selected' : ''; ?> value=" 303  "> GENERAL SAAVEDRA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  304   ? 'selected' : ''; ?> value=" 304  "> MINEROS  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  305   ? 'selected' : ''; ?> value=" 305  "> MONTERO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  306   ? 'selected' : ''; ?> value=" 306  "> PUERTO FERNANDEZ ALONSO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  307   ? 'selected' : ''; ?> value=" 307  "> SAN PEDRO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  308   ? 'selected' : ''; ?> value=" 308  "> CONCEPCION   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  309   ? 'selected' : ''; ?> value=" 309  "> CUATRO CAÑADAS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  310   ? 'selected' : ''; ?> value=" 310  "> SAN ANTONIO DEL MOREIRO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  311   ? 'selected' : ''; ?> value=" 311  "> SAN JAVIER   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  312   ? 'selected' : ''; ?> value=" 312  "> SAN JULIAN   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  313   ? 'selected' : ''; ?> value=" 313  "> SAN RAMON  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  314   ? 'selected' : ''; ?> value=" 314  "> SAN ANTONIO DEL LOMERIO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  315   ? 'selected' : ''; ?> value=" 315  "> SAN MATIAS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  316   ? 'selected' : ''; ?> value=" 316  "> COMARAPA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  317   ? 'selected' : ''; ?> value=" 317  "> SAIPINA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  318   ? 'selected' : ''; ?> value=" 318  "> CARMEN RIVERO TORRES   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  319   ? 'selected' : ''; ?> value=" 319  "> PUERTO QUIJARRO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  320   ? 'selected' : ''; ?> value=" 320  "> PUERTO SUAREZ  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  321   ? 'selected' : ''; ?> value=" 321  "> ASCENCION DE GUARAYOS  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  322   ? 'selected' : ''; ?> value=" 322  "> EL PUENTE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  323   ? 'selected' : ''; ?> value=" 323  "> URUBICHA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  324   ? 'selected' : ''; ?> value=" 324  "> OKINAWA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  325   ? 'selected' : ''; ?> value=" 325  "> WARNES   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  326   ? 'selected' : ''; ?> value=" 326  "> SAN IGNACIO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  327   ? 'selected' : ''; ?> value=" 327  "> SAN RAFAEL   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  328   ? 'selected' : ''; ?> value=" 328  "> SAN MIGUEL   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  329   ? 'selected' : ''; ?> value=" 329  "> TARIJA   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  330   ? 'selected' : ''; ?> value=" 330  "> cercado  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  331   ? 'selected' : ''; ?> value=" 331  "> CERCADO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  332   ? 'selected' : ''; ?> value=" 332  "> CERCADO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  333   ? 'selected' : ''; ?> value=" 333  "> CARAPARí   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  334   ? 'selected' : ''; ?> value=" 334  "> VILLAMONTES  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  335   ? 'selected' : ''; ?> value=" 335  "> YACUIBA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  336   ? 'selected' : ''; ?> value=" 336  "> ENTRE RIOS   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  337   ? 'selected' : ''; ?> value=" 337  "> EL PUENTE  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  338   ? 'selected' : ''; ?> value=" 338  "> SAN LORENZO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  339   ? 'selected' : ''; ?> value=" 339  "> URIONDO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  340   ? 'selected' : ''; ?> value=" 340  "> YUNCHARÁ   </option>
                                  <option <?php echo $alm->Municipio_Seq ==  341   ? 'selected' : ''; ?> value=" 341  "> PATCAYA  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  342   ? 'selected' : ''; ?> value=" 342  "> BERMEJO  </option>
                                  <option <?php echo $alm->Municipio_Seq ==  343   ? 'selected' : ''; ?> value=" 343  "> PADCAYA  </option>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Comunidad">Comunidad:</label>
                                <input type="text" id="Comunidad" name="Comunidad" value="<?php echo $alm->Comunidad;?>" 
                                      class="form-control">
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Organizacion_Pertenece">Organización a la que Pertenece:</label>
                                <input type="text" id="Organizacion_Pertenece" name="Organizacion_Pertenece" 
                                      value="<?php echo $alm->Organizacion_Pertenece; ?>" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Sección: Datos personales -->
                        <div class="card">
                          <div class="card-header">
                            <h5 class="mb-0 title-form">
                              Datos personales
                            </h5>
                          </div>
                          <div class="card-body">

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="Primer_Apellido">Primer Apellido:</label>
                                <input type="text" id="Primer_Apellido" name="Primer_Apellido" value="<?php echo $alm->Primer_Apellido; ?>" 
                                      class="form-control" required>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Primer_Nombre">Primer Nombre:</label>
                                <input type="text" id="Primer_Nombre" name="Primer_Nombre" value="<?php echo $alm->Primer_Nombre; ?>" 
                                      class="form-control">
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Segundo_Apellido">Segundo Apellido:</label>
                                <input type="text" id="Segundo_Apellido" name="Segundo_Apellido" value="<?php echo $alm->Segundo_Apellido; ?>" 
                                      class="form-control">
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Segundo_Nombre">Segundo Nombre:</label>
                                <input type="text" id="Segundo_Nombre" name="Segundo_Nombre" value="<?php echo $alm->Segundo_Nombre; ?>" 
                                      class="form-control">
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Tipo_Documento">Tipo de Documento:</label>
                                <select id="Tipo_Documento" name="Tipo_Documento" class="custom-select mr-sm-2" required>
                                  <option value="" selected>Seleccione Tipo de Documento...</option>
                                  <option <?php echo $alm->Tipo_Documento == 1 ? 'selected' : ''; ?> value="1">C.I.</option>
                                  <option <?php echo $alm->Tipo_Documento == 2 ? 'selected' : ''; ?> value="2">R.U.N.</option>
                                  <option <?php echo $alm->Tipo_Documento == 3 ? 'selected' : ''; ?> value="3">LIBRETA DE S.M.</option>
                                  <option <?php echo $alm->Tipo_Documento == 4 ? 'selected' : ''; ?> value="4">PASAPORTE</option>
                                </select>
                              </div>

                              <div class="form-group col-md-3">
                                <label for="Numero_Documento">Número de Documento:</label>
                                <input type="number" id="Numero_Documento" name="Numero_Documento" value="<?php echo $alm->Numero_Documento; ?>" 
                                      class="form-control" required>
                              </div>

                              <div class="form-group col-md-3">
                                <label for="CboDepCI">Expedido:</label>
                                <select id="CboDepCI" name="Expedido" class="custom-select mr-sm-2" required>
                                  <option value="" selected>Seleccione...</option>
                                  <option <?php echo $alm->Expedido ==80 ? 'selected' : ''; ?> value="80">BENI / TRINIDAD</option>
                                  <option <?php echo $alm->Expedido ==10 ? 'selected' : ''; ?> value="10">CHUQUISACA / SUCRE</option>
                                  <option <?php echo $alm->Expedido ==30 ? 'selected' : ''; ?> value="30">COCHABAMBA</option>
                                  <option <?php echo $alm->Expedido ==20 ? 'selected' : ''; ?> value="20">LA PAZ</option>
                                  <option <?php echo $alm->Expedido ==40 ? 'selected' : ''; ?> value="40">ORURO</option>
                                  <option <?php echo $alm->Expedido ==90 ? 'selected' : ''; ?> value="90">PANDO / COBIJA</option>
                                  <option <?php echo $alm->Expedido ==50 ? 'selected' : ''; ?> value="50">POTOSÍ</option>
                                  <option <?php echo $alm->Expedido ==70 ? 'selected' : ''; ?> value="70">SANTA CRUZ</option>
                                  <option <?php echo $alm->Expedido ==60 ? 'selected' : ''; ?> value="60">TARIJA</option>
                                </select>
                              </div>

                              <div class="form-group col-md-6 date" id='divMiCalendario'>
                                <label for="Fecha_Nacimiento">Fecha de nacimiento:</label>
                                <input type="text" id="Fecha_Nacimiento" name="Fecha_Nacimiento" 
                                  value="<?php echo date(" d-m-Y ", strtotime($alm->Fecha_Nacimiento)); ?>" class="form-control" required>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Sexo">Sexo:</label>
                                <select id="Sexo" name="Sexo" class="custom-select mr-sm-2" required>
                                  <option value="" selected>Seleccione un sexo...</option>
                                  <option <?php echo $alm->Sexo == 1 ? 'selected' : ''; ?> value="1">Masculino</option>
                                  <option <?php echo $alm->Sexo == 2 ? 'selected' : ''; ?> value="2">Femenino</option>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Estado_Civil">Estado Civil:</label>
                                <select id="Estado_Civil" name="Estado_Civil" class="custom-select mr-sm-2">
                                  <option value="" selected>Seleccione el Estado Civil...</option>
                                  <option <?php echo $alm->Estado_Civil == 1 ? 'selected' : ''; ?> value="1">SOLTERO</option>
                                  <option <?php echo $alm->Estado_Civil == 2 ? 'selected' : ''; ?> value="2">CASADO</option>
                                  <option <?php echo $alm->Estado_Civil == 3 ? 'selected' : ''; ?> value="3">DIVORCIADO</option>
                                  <option <?php echo $alm->Estado_Civil == 4 ? 'selected' : ''; ?> value="4">VIUDO</option>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Direccion_vive">Dirección donde vive actualmente:</label>
                                <input type="text" id="Direccion_vive" name="Direccion_vive" value="<?php echo $alm->Direccion_vive; ?>" 
                                      class="form-control" required>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Telefono">Teléfono:</label>
                                <input type="number" id="Telefono" name="Telefono" value="<?php echo $alm->Telefono; ?>" class="form-control">
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Celular">Celular:</label>
                                <input type="number" id="Celular" name="Celular" value="<?php echo $alm->Celular; ?>" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Sección: Datos Laborales -->
                        <div class="card">
                          <div class="card-header">
                            <h5 class="mb-0 title-form">
                              Datos Laborales
                            </h5>
                          </div>
                          <div class="card-body">

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="Tipo_Trabajo">Modalidad de Trabajo como Médico Tradicional:</label>
                                <select id="Tipo_Trabajo" name="Tipo_Trabajo" class="custom-select mr-sm-2">
                                  <option value="" selected>Seleccione la modalidad de trabajo...</option>
                                  <option <?php echo $alm->Tipo_Trabajo == 1 ? 'selected' : ''; ?> value="1">AMBULANTE</option>
                                  <option <?php echo $alm->Tipo_Trabajo == 2 ? 'selected' : ''; ?> value="2">FIJO</option>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Direccion_Trabajo">Dirección donde Trabaja como Médico Tradicional:</label>
                                <input type="text" id="Direccion_Trabajo" name="Direccion_Trabajo" value="<?php echo $alm->Direccion_Trabajo; ?>" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Sección: Datos de Especialidad -->
                        <div class="card">
                          <div class="card-header">
                            <h5 class="mb-0 title-form">
                              Datos de Especialidad
                            </h5>
                          </div>
                          <div class="card-body">

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="CboEspecialidad">Especialidad:</label>
                                <select id="CboEspecialidad" name="Especialedad_Seq" class="custom-select mr-sm-2" required>
                                  <option value="" selected>Seleccione una Especialidad...</option>
                                  <option <?php echo $alm->Especialedad_Seq == 1   ? 'selected' : ''; ?> value=" 1  "> TRADICIONAL  </option>
                                  <option <?php echo $alm->Especialedad_Seq == 2   ? 'selected' : ''; ?> value=" 2  "> NATURISTA  </option>
                                  <option <?php echo $alm->Especialedad_Seq == 3   ? 'selected' : ''; ?> value=" 3  "> PARTERA / O  </option>
                                  <option <?php echo $alm->Especialedad_Seq == 4   ? 'selected' : ''; ?> value=" 4  "> GUIAS ESPIRITUALES   </option>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="CboSubEspecialidad">Sub Especialidad:</label>
                                <select id="CboSubEspecialidad" name="SubEspecialidad_Seq" class="custom-select mr-sm-2" required>
                                  <option value="" selected>Seleccione una Sub Especialidad...</option>
                                  <option <?php echo $alm->SubEspecialidad_Seq == 1   ? 'selected' : ''; ?> value=" 1  "> FITOTERAPEUTA  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  2   ? 'selected' : ''; ?> value=" 2  "> HERBOLARIO/A   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  3   ? 'selected' : ''; ?> value=" 3  "> MATERO/A   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  4   ? 'selected' : ''; ?> value=" 4  "> MEDICO NATURISTA   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  5   ? 'selected' : ''; ?> value=" 5  "> NATURISTA  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  6   ? 'selected' : ''; ?> value=" 6  "> NATURISTA TRADICIONAL  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  7   ? 'selected' : ''; ?> value=" 7  "> NUTRICIONISTA  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  8   ? 'selected' : ''; ?> value=" 8  "> PROMOTOR/A   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  9   ? 'selected' : ''; ?> value=" 9  "> TERAPEUTA  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  10    ? 'selected' : ''; ?> value=" 10   "> PARTERO/A  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  11    ? 'selected' : ''; ?> value=" 11   "> AMAUTAS  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  12    ? 'selected' : ''; ?> value=" 12   "> AYSIRI   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  13    ? 'selected' : ''; ?> value=" 13   "> HUESERO/A  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  14    ? 'selected' : ''; ?> value=" 14   "> IPAYES   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  15    ? 'selected' : ''; ?> value=" 15   "> JAMPIRI  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  16    ? 'selected' : ''; ?> value=" 16   "> KAKURI   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  17    ? 'selected' : ''; ?> value=" 17   "> KALLAWAYAS   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  18    ? 'selected' : ''; ?> value=" 18   "> MEDICO TRADICIONAL   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  19    ? 'selected' : ''; ?> value=" 19   "> QHAPACHAQUERO/A  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  20    ? 'selected' : ''; ?> value=" 20   "> QULLIRI  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  21    ? 'selected' : ''; ?> value=" 21   "> SANTIGUADOR/RA   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  22    ? 'selected' : ''; ?> value=" 22   "> YATIRI   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  23    ? 'selected' : ''; ?> value=" 23   "> SANTIGUADOR/RA   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  24    ? 'selected' : ''; ?> value=" 24   "> OTROS  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  25    ? 'selected' : ''; ?> value=" 25   "> OTROS  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  26    ? 'selected' : ''; ?> value=" 26   "> OTROS  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  27    ? 'selected' : ''; ?> value=" 27   "> OTROS  </option>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Años de Experiencia:</label>
                                <input type="text" name="Anos_Experiencia_Especialidad" value="<?php echo $alm->Anos_Experiencia_Especialidad; ?>" 
                                      id="Anos_Experiencia_Especialidad" class="form-control" maxlength="2" required>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Anos_Experiencia_Sub_Especialidad">Años de Experiencia de Sub Especialidad:</label>
                                <input type="text" name="Anos_Experiencia_Sub_Especialidad" value="<?php echo $alm->Anos_Experiencia_Sub_Especialidad; ?>" 
                                      id="Anos_Experiencia_Sub_Especialidad" class="form-control" maxlength="2" required>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Numero_Pacientes">Número de Pacientes Ultimo Año(opcional)::</label>
                                <input type="text" id="Numero_Pacientes" name="Numero_Pacientes" value="<?php echo $alm->Numero_Pacientes; ?>" 
                                      class="form-control" maxlength="4">
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Sección: Idiomas -->
                        <div class="card">
                          <div class="card-header">
                            <h5 class="mb-0 title-form">
                              Idiomas
                            </h5>
                          </div>
                          <div class="card-body">

                            <div class="form-row">
                              <div class="col-md-12"> <!-- table-responsive -->
                              <table class="table">
                                  <thead class=" text-primary">
                                    <th>Idioma</th>
                                    <th>Seleccionar</th>
                                  </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <label class="form-check-label" for="">Castellano</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="hablaCas">Si</label>
                                        <input type="radio" name="Lee" id="hablaCas" class="form-check-input"
                                          <?php echo $alm->Lee == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaCas">No</label>
                                        <input type="radio" name="Lee" id="noHablaCas" class="form-check-input" 
                                          <?php echo $alm->Lee == 2 ? 'checked' : $alm->Lee != 1 ? 'checked' : '' ; ?> value="2">
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeCas">Si</label>
                                        <input type="radio" name="Escribe" id="escribeCas" class="form-check-input"
                                          <?php echo $alm->Escribe == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeCas">No</label>
                                        <input type="radio" name="Escribe" id="noEscribeCas" class="form-check-input" 
                                          <?php echo $alm->Escribe == 2 ? 'checked' : $alm->Escribe != 1 ? 'checked' : '' ; ?> value="2">
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Quechua</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="hablaQue">Si</label>
                                        <input type="radio" name="Lee_Quechua" id="hablaQue" class="form-check-input"
                                          <?php echo $alm->Lee_Quechua == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaQue">No</label>
                                        <input type="radio" name="Lee_Quechua" id="noHablaQue" class="form-check-input" 
                                          <?php echo $alm->Lee_Quechua == 2 ? 'checked' : $alm->Lee_Quechua != 1 ? 'checked' : '' ; ?> value="2">
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="EscribeQue">Si</label>
                                        <input type="radio" name="EscribeQ" id="EscribeQue" class="form-check-input"
                                          <?php echo $alm->EscribeQ == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeQue">No</label>
                                        <input type="radio" name="EscribeQ" id="noEscribeQue" class="form-check-input" 
                                          <?php echo $alm->EscribeQ == 2 ? 'checked' : $alm->EscribeQ != 1 ? 'checked' : '' ; ?> value="2">
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Aymara</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="hablaAym">Si</label>
                                        <input type="radio" name="LeeA" id="hablaAym" class="form-check-input"
                                          <?php echo $alm->LeeA == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaAym">No</label>
                                        <input type="radio" name="LeeA" id="noHablaAym" class="form-check-input" 
                                          <?php echo $alm->LeeA == 2 ? 'checked' : $alm->LeeA != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeAym">Si</label>
                                        <input type="radio" name="EscribeA" id="escribeAym" class="form-check-input"
                                          <?php echo $alm->EscribeA == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeAym">No</label>
                                        <input type="radio" name="EscribeA" id="noEscribeAym" class="form-check-input" 
                                          <?php echo $alm->EscribeA == 2 ? 'checked' : $alm->EscribeA != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Guarani</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="hablaGua">Si</label>
                                        <input type="radio" name="LeeG" id="hablaGua" class="form-check-input"
                                          <?php echo $alm->LeeG == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaGua">No</label>
                                        <input type="radio" name="LeeG" id="noHablaGua" class="form-check-input" 
                                          <?php echo $alm->LeeG == 2 ? 'checked' : $alm->LeeG != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeGua">Si</label>
                                        <input type="radio" name="EscribeG" id="escribeGua" class="form-check-input"
                                          <?php echo $alm->EscribeG == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeGua">No</label>
                                        <input type="radio" name="EscribeG" id="noEscribeGua" class="form-check-input" 
                                          <?php echo $alm->EscribeG == 2 ? 'checked' : $alm->EscribeG != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Otro</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="hablaOtro">Si</label>
                                        <input type="radio" name="LeeO" id="hablaOtro" class="form-check-input"
                                          <?php echo $alm->LeeO == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaOtro">No</label>
                                        <input type="radio" name="LeeO" id="noHablaOtro" class="form-check-input" 
                                          <?php echo $alm->LeeO == 2 ? 'checked' : $alm->LeeO != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeOtro">Si</label>
                                        <input type="radio" name="EscribeO" id="escribeOtro" class="form-check-input"
                                          <?php echo $alm->EscribeO == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeOtro">No</label>
                                        <input type="radio" name="EscribeO" id="noEscribeOtro" class="form-check-input" 
                                          <?php echo $alm->EscribeO == 2 ? 'checked' : $alm->EscribeO != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                                </table>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="Descripcion_idiomaO">Descripción de otro idioma:</label>
                                <input type="text" id="Descripcion_idiomaO" name="Descripcion_idiomaO" 
                                        value="<?php echo $alm->Descripcion_idiomaO; ?>" class="form-control form-control-sm">
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Sección: Datos del Formulario -->
                        <div class="card">
                          <div class="card-header">
                            <h5 class="mb-0 title-form">
                              Datos del Formulario
                            </h5>
                          </div>
                          <div class="card-body">

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="Codigo_Formulario">Código de Formulario:</label>
                                <input type="text" id="Codigo_Formulario" name="Codigo_Formulario" value="<?php echo $alm->Codigo_Formulario; ?>" 
                                      class="form-control" required>
                              </div>

                              <div class="form-group col-md-6"  id="divMiCalendario2">
                                <label for="Fecha_Formulario">Fecha del Formulario:</label>
                                <input type="text" id="Fecha_Formulario" name="Fecha_Formulario" 
                                      value="<?php echo date(" d-m-Y ", strtotime($alm->Fecha_Formulario));?>" 
                                      class="form-control" required>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Sección: Datos del Registro Sistema -->
                        <div class="card">
                          <div class="card-header">
                            <h5 class="mb-0 title-form">
                              Datos del Registro Sistema
                            </h5>
                          </div>
                          <div class="card-body">

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="HoraRegistro_Formulario">Hora de Formulario:</label>
                                <input type="text" id="HoraRegistro_Formulario" name="HoraRegistro_Formulario" 
                                      value="<?php echo date(" H:i:s ",time()-3909600); ?>" class="form-control" readonly>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="FechaRegistro_Formulario">Fecha del Formulario:</label>
                                <input type="text" id="FechaRegistro_Formulario" name="FechaRegistro_Formulario" value="<?php echo date(" d-m-Y ", time());?>" 
                                      class="form-control" readonly>
                              </div>
                            </div>
                          </div>
                        </div> 
                    </div>

                  </div>
                </div>
                <div class="card-footer">
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                  </div>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
      <?php include_once __DIR__ . '/../partials/footer.php'; ?>
    </div>
  </div>

</body>

<!--   Core JS Files   -->
<?php include_once __DIR__ . '/../partials/scripts.php'; ?>

<script src="assets/v2/js/plugins/moment.min.js"></script>
<script src="assets/v2/js/plugins/daterangepicker.min.js"></script>

<script type="text/javascript">

  $('#Fecha_Nacimiento').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    locale: {
      format: 'DD-MM-YYYY'
    }
  });
  
  $('#Fecha_Formulario').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    locale: {
      format: 'DD-MM-YYYY'
    }
  });

</script>

</html>