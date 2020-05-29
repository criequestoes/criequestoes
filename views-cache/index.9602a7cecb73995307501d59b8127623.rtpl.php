<?php if(!class_exists('Rain\Tpl')){exit;}?>

      <!-- PRODUÇÕES DE QUESTÕES   -->
      <div class="content-wrapper">
        <!-- TÍTULO : CRIANDO UMA QUESTÃO -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Criando uma questão...</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- PARÂMETROS -->
        <section class="content">

          <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"> Direcionando o conteúdo</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Estágio</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Ensino Fundamenta I</option>
                        <option>Ensino Fundamental II</option>
                        <option>Ensino Médio</option>
                        <option>Outro</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                       <label>Assunto</label>
                      <select class="select2" multiple="multiple" data-placeholder="Qual frente da disciplina?" style="width: 100%;">
                        <option>Álgebra</option>
                        <option>Geometria</option>
                        <option>Análise de Dados</option>              
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  

                  <!-- /.col -->
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Área Conhecimento</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Linguagens</option>
                        <option>Humanas</option>
                        <option>Natureza</option>
                        <option>Matemática</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <div class="form-group">
                       <label>Tópico</label>
                      <select class="select2" multiple="multiple" data-placeholder="Qual tópico do assunto?" style="width: 100%;">
                        <option>Geometria plana</option>
                        <option>Geometria espacial</option>
                        <option>Geometria analítica</option>              
                      </select>
                    </div>
                    </div>
                    <!-- /.form-group -->

                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Disciplina</label>
                      <select class="select2" multiple="multiple" data-placeholder="Qual(as) disciplina(as)?" style="width: 100%;">
                        <option>Matemática</option>
                        <option>Física</option>
                        <option>Química</option>
                        <option>Biologia</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <div class="form-group">
                       <label>Abrangência</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option>Simples</option>
                        <option>Interdisciplinar</option>
                        <option>Multidisciplinar</option>              
                      </select>
                    </div>
                    </div>
                    <!-- /.form-group -->
                  
                  </div>
                  <!-- /.col -->
                </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- CONTEXTO-->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Crie o contexto
                    <small>... onde a questão se aplica?</small>
                  </h3>
                  <!-- tools box -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                  <div class="mb-3">
                    
                    <textarea id="editor1" name="desproduct">&lt;p&gt;Valor inicial.&lt;/p&gt;</textarea>
                    <!--<textarea class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>-->
                  <script src="../../res/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
        <!-- SUPORTE -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Crie o suporte
                    <small>...elementos de apoio: gráficos, textos e outros ... </small>
                  </h3>
                  <!-- tools box -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
        <!-- COMANDO-->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Crie o comando
                    <small>...seja claro e objetivo ... </small>
                  </h3>
                  <!-- tools box -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                
                    </textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
        <!-- ALTERNATIVAS - RESOLUÇÃO -->
        <section class="content">
          <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-warning">
                  <div class="card-header">
                    <h3 class="card-title">Aternativas</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>  
                    </div>
                  </div>

                  <!-- PRIMEIRA ALTERNATIVA:CORRETA -->
                  <div class="card-body">
                    <form role="form">
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- textarea -->
                          <div class="form-group">
                            <label>Alternativa Correta</label>
                            <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">                         
                            </textarea>  
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Resolução</label>
                            <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">                         
                            </textarea>  
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- SEGUNDA ALTERNATIVA: ERRADA  -->
                  <div class="card-body">
                    <form role="form">
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- textarea -->
                          <div class="form-group">
                            <label>PRIMEIRA alternativa Errada</label>
                            <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">                         
                            </textarea>  
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Distrator</label>
                            <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">                         
                            </textarea>  
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- TERCEIRA ALTERNATIVA: ERRADA  -->
                  <div class="card-body">
                    <form role="form">
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- textarea -->
                          <div class="form-group">
                            <label>SEGUNDA alternativa Errada</label>
                            <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">                         
                            </textarea>  
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Distrator</label>
                            <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">                         
                            </textarea>  
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!--QUARTA ALTERNATIVA: ERRADA  -->
                  <div class="card-body">
                    <form role="form">
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- textarea -->
                          <div class="form-group">
                            <label>TERCEIRA alternativa Errada</label>
                            <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">                         
                            </textarea>  
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Distrator</label>
                            <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">                         
                            </textarea>  
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                 <!--QUINTA ALTERNATIVA: ERRADA  -->
                  <div class="card-body">
                    <form role="form">
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- textarea -->
                          <div class="form-group">
                            <label>QUARTA alternativa Errada</label>
                            <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">                         
                            </textarea>  
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Distrator</label>
                            <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">                         
                            </textarea>  
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>

            </div>
        </section>
      </div>
      

