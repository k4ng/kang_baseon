<?=$header;?>
<div class="container">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">
                    Settings <span class="m-l-5"><i class="fa fa-cog"></i></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index.html#">Action</a></li>
                    <li><a href="index.html#">Another action</a></li>
                    <li><a href="index.html#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="index.html#">Separated link</a></li>
                </ul>
            </div>
            <h4 class="page-title">Vue.js Router</h4>
        </div>
    </div>
    <div id="app">
        <p>
            <!-- use router-link component for navigation. -->
            <!-- specify the link by passing the `to` prop. -->
            <!-- <router-link> will be rendered as an `<a>` tag by default -->
            <router-link to="/foo">Go to Foo</router-link> | 
            <router-link to="/bar">Go to Bar</router-link> | 
            <router-link to="/cax">Cax</router-link>
        </p>
        <!-- route outlet -->
        <!-- component matched by the route will render here -->
        <router-view></router-view>
    </div>

    <template id="add-data">
        disini tempat menambah data
    </template>
</div>
<?=$footer;?>