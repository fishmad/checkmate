@extends('layouts.master')

@section('content')
      <div class="container">
        <div class="animate fadeIn">

          <div class="card">

            <div class="card-header">
							<h2>CRUD Generator
								<small>
									Modals are streamlined, but flexible, dialog prompts with 
                  the minimum required functionality and smart defaults.
								</small>
							</h2>
						</div>

            <div class="card-body">

              <form class="form-horizontal" method="post" action="{{ url('/crud') }}">
                {{ csrf_field() }}

                <div class="form-group row">
                  <label for="crud_name" class="col-md-3 col-xl-2 col-form-label">Crud name:
                    <small id="emailHelp" class="form-text text-muted">
                    (Sentencecase) singular
                    </small>
                   </label>
                  <div class="col">
                    <input type="text" name="crud_name" class="form-control" id="crud_name" placeholder="" required="true">
                    <small id="emailHelp" class="form-text text-muted">
                    Auto: Controller = Actor; SQL-table = actors;  view path = \actors;  url route = /actors/index.php
                    </small>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="controller_namespace" class="col-md-3 col-xl-2 col-form-label">Controller namespace:</label>
                  <div class="col">
                    <input type="text" name="controller_namespace" class="form-control" id="controller_namespace" placeholder="Leave blank | Movies (CamelCase)">
                    <small id="emailHelp" class="form-text text-muted">
                    DEFAULT: app\Http\Controllers\ActorsController.php | CUSTOM: app\Http\Controllers\Movies\ActorsController.php
                    </small>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="route_group" class="col-md-3 col-xl-2 col-form-label">Route group prefix:</label>
                  <div class="col">
                    <input type="text" name="route_group" class="form-control" id="route_group" placeholder="Leave blank | stars (lowercase)">
                    <small id="emailHelp" class="form-text text-muted">
                    DEFAULT: Route::resource('/actors', 'ActorsController'); | CUSTOM: Route::resource('Stars/actors', 'Movies\\ActorsController');
                    </small>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="view_path" class="col-md-3 col-xl-2 col-form-label">View path:</label>
                  <div class="col">
                    <input type="text" name="view_path" class="form-control" id="view_path" placeholder="Leave blank | admin (lowercase)">
                    <small id="emailHelp" class="form-text text-muted">
                    DEFAULT: \resources\views\actors\.. | CUSTOM: \resources\views\admin\actors\..
                    </small>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="route" class="col-md-3 col-xl-2 col-form-label">Add route?
                  <small id="emailHelp" class="form-text text-muted">
                    Append routes\web.php 
                  </small>
                  </label>
                  <div class="col">
                    <select name="route" class="form-control" id="route">
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">
                    DEFAULT: Route::resource('actors', 'ActorsController'); | CUSTOM: Route::resource('Admin/actors', 'Movies\\ActorsController');
                    </small>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="relationships" class="col-md-3 col-xl-2 col-form-label">Relationships</label>
                  <div class="col">
                    <input type="text" name="relationships" class="form-control" id="relationships" placeholder="">
                    <small id="emailHelp" class="form-text text-muted">
                    DEFAULT: None | method#relationType#Model (ie: comments#hasMany#App\Comment)
                    </small>
                  </div>
                </div>

                <!-- <div class="form-group row">
                  <label for="form_helper" class="col-md-3 col-xl-2 col-form-label">Form helper</label>
                  <div class="col">
                    <input type="text" name="form_helper" class="form-control" id="form_helper" value="laravelcollective">
                  </div>
                </div> -->


                <div class="form-group row">
                  <label for="form_helper" class="col-md-3 col-xl-2 col-form-label">Form helper</label>
                  <div class="col">
                    <select name="form_helper" class="form-control" id="form_helper" value="laravelcollective">
                      <option value="coreui">CoreUI + Laravel Collective (BS4)</option>
                      <option value="laravelcollective">Bootstrap 3 + Laravel Collective (BS3)</option>
                      <option value="html">Vanilla HTML</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">
                    </small>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="soft_deletes" class="col-md-3 col-xl-2 col-form-label">Soft deletes?</label>
                  <div class="col">
                    <select name="soft_deletes" class="form-control" id="soft_deletes">
                      <option value="no">No</option>
                      <option value="yes">Yes</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">
                    </small>
                  </div>
                </div>

                <hr>

                
                  
									<div class="table-fields">
                    <div class="entry"><!-- /.entry - Repeats -->

                    <div class="form-row">
                    
                      <label for="table_fields" class="col-md-3 col-xl-2 mt-sm-2">Database fields:</label>

                      <div class="col-sm-12 col-md-3 col-lg-2">
                        <select name="fields_type[]" class="form-control">
                          <option value="string">STRING</option>
                          <option value="text">TEXT</option>
                          <option value="mediumtext">MEDIUMTEXT</option>
                          <option value="longtext">LONGTEXT</option>
                          <option value="char">CHAR</option>
                          <option value="varchar">VARCHAR</option>
                          <option value="email">EMAIL</option>
                          <option value="password">PASSWORD</option>
                          <option value="date">DATE</option>
                          <option value="datetime">DATETIME</option>
                          <option value="time">TIME</option>
                          <option value="timestamp">TIMESTAMP</option>
                          <option value="number">NUMBER</option>
                          <option value="decimal">DECIMAL</option>
                          <option value="json">JSON</option>
                          <option value="jsonb">JSONB</option>
                          <option value="binary">BINARY</option>
                          <option value="integer">INTERGER</option>
                          <option value="tinyint">TINYINT</option>
                          <option value="smallint">SMALLINT</option>
                          <option value="mediumint">MEDIUMINT</option>
                          <option value="bigint">BIGINT</option>
                          <option value="boolean">BOOLEAN</option>
                          <option value="double">DOUBLE</option>
                          <option value="float">FLOAT</option>
                        </select>
                      </div>

                      <div class="col">
                        <input class="form-control" name="fields[]" type="text" value="name" placeholder="Description (snake_case)" required="true">
                      </div>

                      <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="form-inline pull-right text-right">
                          <label>Required:</label>
                          <select name="fields_required[]" class="form-control ml-sm-2">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                          </select>
                          <button class="btn btn-success btn-add inline ml-sm-2" type="button">
                            <i class="fa fa-plus"></i>
                          </button>
                        </div>
                      </div>

                    </div><!-- /.form-row -->
                    <hr>
                  </div><!-- /.entry - Repeats -->
                </div><!-- /.table-fields -->

                
                <br/>
                <div class="form-group row">
                  <div class="offset-md-3 offset-xl-2 col">
                    <button type="submit" class="btn btn-primary" name="generate">Save Changes &amp; Generate CRUD</button>
                  </div>
                </div>
                <br/>
              </form>


            </div>
          </div>
        </div>
      </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $( document ).ready(function() {

            $(document).on('click', '.btn-add', function(e) {
                e.preventDefault();

                var tableFields = $('.table-fields'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(tableFields);

                    newEntry.find('input').val('');

                    tableFields.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<i class="fa fa-minus"></i>');


            }).on('click', '.btn-remove', function(e) {

                $(this).parents('.entry:last').remove();

                $('.table-fields').find('.entry:first')
                .removeClass('offset-md-3 offset-xl-2');

                e.preventDefault();
                return false;
            });

        });
    </script>
@endpush