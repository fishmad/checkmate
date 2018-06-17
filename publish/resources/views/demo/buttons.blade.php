@extends('demo.layout')
@section('content')
	      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="row">

            <div class="col-md-6">

              <div class="card">
                <div class="card-header">
                  <strong>Options</strong>
                </div>
                <div class="card-body">
                  <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                  <button type="button" class="btn btn-primary">Primary</button>

                  <!-- Secondary, outline button -->
                  <button type="button" class="btn btn-secondary">Secondary</button>

                  <!-- Indicates a successful or positive action -->
                  <button type="button" class="btn btn-success">Success</button>

                  <!-- Indicates caution should be taken with this action -->
                  <button type="button" class="btn btn-warning">Warning</button>

                  <!-- Indicates a dangerous or potentially negative action -->
                  <button type="button" class="btn btn-danger">Danger</button>

                  <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                  <button type="button" class="btn btn-link">Link</button>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>With Icons</strong>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-primary"><i class="fa fa-star"></i>&nbsp; Primary</button>
                  <button type="button" class="btn btn-secondary"><i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                  <button type="button" class="btn btn-success"><i class="fa fa-magic"></i>&nbsp; Success</button>
                  <button type="button" class="btn btn-warning"><i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                  <button type="button" class="btn btn-danger"><i class="fa fa-rss"></i>&nbsp; Danger</button>
                  <button type="button" class="btn btn-link"><i class="fa fa-link"></i>&nbsp; Link</button>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>Size Large</strong>
                  <small>Add this class
                    <code>.btn-lg</code>
                  </small>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-primary btn-lg">Primary</button>
                  <button type="button" class="btn btn-secondary btn-lg">Secondary</button>
                  <button type="button" class="btn btn-success btn-lg">Success</button>
                  <button type="button" class="btn btn-info btn-lg">Info</button>
                  <button type="button" class="btn btn-warning btn-lg">Warning</button>
                  <button type="button" class="btn btn-danger btn-lg">Danger</button>
                  <button type="button" class="btn btn-link btn-lg">Link</button>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>Size Small</strong>
                  <small>Add this class
                    <code>.btn-sm</code>
                  </small>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-primary btn-sm">Primary</button>
                  <button type="button" class="btn btn-secondary btn-sm">Secondary</button>
                  <button type="button" class="btn btn-success btn-sm">Success</button>
                  <button type="button" class="btn btn-info btn-sm">Info</button>
                  <button type="button" class="btn btn-warning btn-sm">Warning</button>
                  <button type="button" class="btn btn-danger btn-sm">Danger</button>
                  <button type="button" class="btn btn-link btn-sm">Link</button>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>Disabled state</strong>
                  <small>Add this
                    <code>disabled="disabled"</code>
                  </small>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-primary" disabled="disabled">Primary</button>
                  <button type="button" class="btn btn-secondary" disabled="disabled">Secondary</button>
                  <button type="button" class="btn btn-success" disabled="disabled">Success</button>
                  <button type="button" class="btn btn-info" disabled="disabled">Info</button>
                  <button type="button" class="btn btn-warning" disabled="disabled">Warning</button>
                  <button type="button" class="btn btn-danger" disabled="disabled">Danger</button>
                  <button type="button" class="btn btn-link" disabled="disabled">Link</button>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>Active state</strong>
                  <small>Add this class
                    <code>.active</code>
                  </small>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-primary active">Primary</button>
                  <button type="button" class="btn btn-secondary active">Secondary</button>
                  <button type="button" class="btn btn-success active">Success</button>
                  <button type="button" class="btn btn-info active">Info</button>
                  <button type="button" class="btn btn-warning active">Warning</button>
                  <button type="button" class="btn btn-danger active">Danger</button>
                  <button type="button" class="btn btn-link active">Link</button>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>Block Level Buttons</strong>
                  <small>Add this class
                    <code>.btn-block</code>
                  </small>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
                  <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                  <button type="button" class="btn btn-success btn-lg btn-block">Block level button</button>
                  <button type="button" class="btn btn-info btn-lg btn-block">Block level button</button>
                  <button type="button" class="btn btn-warning btn-lg btn-block">Block level button</button>
                  <button type="button" class="btn btn-danger btn-lg btn-block">Block level button</button>
                  <button type="button" class="btn btn-link btn-lg btn-block">Block level button</button>
                </div>
              </div>

            </div>
            <!--/.col-->

            <div class="col-md-6">

              <div class="card">
                <div class="card-header">
                  <strong>Options</strong>
                </div>
                <div class="card-body">
                  <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                  <button type="button" class="btn btn-outline-primary">Primary</button>

                  <!-- Secondary, outline button -->
                  <button type="button" class="btn btn-outline-secondary">Secondary</button>

                  <!-- Indicates a successful or positive action -->
                  <button type="button" class="btn btn-outline-success">Success</button>

                  <!-- Indicates caution should be taken with this action -->
                  <button type="button" class="btn btn-outline-warning">Warning</button>

                  <!-- Indicates a dangerous or potentially negative action -->
                  <button type="button" class="btn btn-outline-danger">Danger</button>

                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>With Icons</strong>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-outline-primary"><i class="fa fa-star"></i>&nbsp; Primary</button>
                  <button type="button" class="btn btn-outline-secondary"><i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                  <button type="button" class="btn btn-outline-success"><i class="fa fa-magic"></i>&nbsp; Success</button>
                  <button type="button" class="btn btn-outline-warning"><i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                  <button type="button" class="btn btn-outline-danger"><i class="fa fa-rss"></i>&nbsp; Danger</button>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>Size Large</strong>
                  <small>Add this class
                    <code>.btn-lg</code>
                  </small>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-outline-primary btn-lg">Primary</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg">Secondary</button>
                  <button type="button" class="btn btn-outline-success btn-lg">Success</button>
                  <button type="button" class="btn btn-outline-info btn-lg">Info</button>
                  <button type="button" class="btn btn-outline-warning btn-lg">Warning</button>
                  <button type="button" class="btn btn-outline-danger btn-lg">Danger</button>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>Size Small</strong>
                  <small>Add this class
                    <code>.btn-sm</code>
                  </small>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-outline-primary btn-sm">Primary</button>
                  <button type="button" class="btn btn-outline-secondary btn-sm">Secondary</button>
                  <button type="button" class="btn btn-outline-success btn-sm">Success</button>
                  <button type="button" class="btn btn-outline-info btn-sm">Info</button>
                  <button type="button" class="btn btn-outline-warning btn-sm">Warning</button>
                  <button type="button" class="btn btn-outline-danger btn-sm">Danger</button>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>Disabled state</strong>
                  <small>Add this
                    <code>disabled="disabled"</code>
                  </small>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-outline-primary" disabled="disabled">Primary</button>
                  <button type="button" class="btn btn-outline-secondary" disabled="disabled">Secondary</button>
                  <button type="button" class="btn btn-success" disabled="disabled">Success</button>
                  <button type="button" class="btn btn-outline-info" disabled="disabled">Info</button>
                  <button type="button" class="btn btn-outline-warning" disabled="disabled">Warning</button>
                  <button type="button" class="btn btn-outline-danger" disabled="disabled">Danger</button>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>Active state</strong>
                  <small>Add this class
                    <code>.active</code>
                  </small>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-outline-primary active">Primary</button>
                  <button type="button" class="btn btn-outline-secondary active">Secondary</button>
                  <button type="button" class="btn btn-outline-success active">Success</button>
                  <button type="button" class="btn btn-outline-info active">Info</button>
                  <button type="button" class="btn btn-outline-warning active">Warning</button>
                  <button type="button" class="btn btn-outline-danger active">Danger</button>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <strong>Block Level Buttons</strong>
                  <small>Add this class
                    <code>.btn-block</code>
                  </small>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block level button</button>
                  <button type="button" class="btn btn-outline-primary btn-lg btn-block">Block level button</button>
                  <button type="button" class="btn btn-outline-success btn-lg btn-block">Block level button</button>
                  <button type="button" class="btn btn-outline-info btn-lg btn-block">Block level button</button>
                  <button type="button" class="btn btn-outline-warning btn-lg btn-block">Block level button</button>
                  <button type="button" class="btn btn-outline-danger btn-lg btn-block">Block level button</button>
                </div>
              </div>

            </div>
            <!--/.col-->
          </div>
          <!--/.row-->
        </div>

      </div>

@endsection