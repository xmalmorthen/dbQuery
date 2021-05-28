<?php defined('BASEPATH') OR exit('No direct script access allowed');
    $__userDataSession = isset($_SESSION[SESSIONVAR]) ? $_SESSION[SESSIONVAR] : null;
?>

<div class='p-3'>
    <h2 class="border-bottom"><i class="fa fa-user-circle-o" aria-hidden="true"></i> USUARIOS</h2>
    <br />    
    <div class="row bodyVew">
        <?php if (checkAccess(['super','admin'])) { ?>
        <div class="col-12">
            <div class="btn-group" role="group" aria-label="actions butons">
                <a class="btn btn-outline-primary" data-toggle='collapse' href="#addUserSection" role="button" aria-expanded="false" aria-controls="addUserSection"><i class="fa fa-user-circle-o" aria-hidden="true"></i> &nbsp; Agregar</a>
            </div>
            <div class="collapse pt-3" id="addUserSection">
                <div class="card border-primary">
                    <div class='card-header d-flex justify-content-between'>
                        <h4>Agregar usuario</h4>
                        <a class="btn btn-outline-secondary" data-toggle='collapse' href="#addUserSection" role="button" aria-expanded="false" aria-controls="addUserSection"><i class="fa fa-times" aria-hidden="true"></i></a>        
                    </div>
                    <div class='card-body'>
                        <div class='text-right'><strong><i class="fa fa-asterisk text-danger" aria-hidden="true"></i></strong> información requerida...</div>
                        <form action="#" id="frmAddUsers" name="frmAddUsers" autocomplete="off" novalidate>
                            <div class="form-row">
                                <div class="col-12 col-md-6 my-2">
                                    <label for="userName" class='requiredMark mb-0'>Nombre de usuario</label>
                                    <input type="text" id="username" name='username' class="form-control required" minlength = 5 maxlength="20" required>                            
                                </div>
                                <div class="col-12 col-md-6 my-2">
                                    <label for="idPerson" class='requiredMark mb-0'>Persona</label>
                                    <div class="d-flex justify-content-start">
                                        <select class="form-control select2Cmb required" id="idPerson" name="idPerson" data-error="#err_idPerson" required></select>
                                        <div class="btn-group" role="group">
                                            <?php if (checkAccess(['super','admin'])) { ?>
                                                <a href="#" class="btnAddPersona btn btn-outline-dark" onclick="$usersObj.fncs.tab.users.addPerson(); return false;" data-noouterclick="true" title='Agregar'><i class="fa fa-plus" aria-hidden="true"></i></a>
                                            <?php } ?>
                                            <a href="#" class="btnRefreshCmbPerson btn btn-outline-info" onclick="$usersObj.fncs.tab.users.refresh.cmbPerson( $('#idPerson') ); return false;" data-noouterclick="true" title='Actualizar lista'><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <span id="err_idPerson"></span>
                                </div>
                                <div class="col-12 col-md-6 my-2">
                                    <label for="password" class='requiredMark mb-0'>Contraseña</label>
                                    <input type="password" id="password" name='password' class="form-control required" minlength = 8 maxlength="15" required>                            
                                </div>
                                <div class="col-12 col-md-6 my-2">
                                    <label for="confirmPassword" class='requiredMark mb-0'>Confirmar contraseña</label>
                                    <input type="password" id="confirmPassword" name='confirmPassword' class="form-control confirmPassword required" minlength = 8 maxlength="15" required>                            
                                </div>
                                <div class="col-12 my-2">
                                    <label for="roles" class='requiredMark mb-0'>Rol(es)</label>                            
                                    <div class="d-flex justify-content-start">
                                        <select class="form-control select2Cmb required" id="roles" name="roles[]" data-error="#err_roles" multiple required></select>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btnRefreshCmbRol btn btn-outline-info" onclick="$usersObj.fncs.tab.users.refresh.cmbRol( $('#roles') ); return false;" data-noouterclick="true" title='Actualizar lista'><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <span id="err_roles"></span>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-12 text-right">
                                    <button type="button" class="btn btn-outline-success saveUser"><i class="fa fa-floppy-o" aria-hidden="true"></i> Registrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100">&nbsp;</div>
        <?php }?>
        <div class="col-12 tableSection">
            <h3 class='border-bottom'><i class="fa fa-list-alt" aria-hidden="true"></i> Usuarios registrados</h3>
            <table id="tblUsers" class="display nowrap table-striped" style="width:100%" data-order='[[ 0, "desc" ]]'>
                <thead>
                    <tr class="text-center">
                        <th class='all'>Usuario</th>
                        <th class='none'>Nombre</th>
                        <th class='min-tablet-p'>Activo</th>
                        <th class='none'>Fecha de registro</th>
                        <th class='none'>Rol(es)</th>
                        <th class='all'><i class="fa fa-fire" aria-hidden="true"></i> Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="sectionAddPerson" class="d-none">
    <h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> Agregar persona</h3>
    <div class='text-right'><strong><i class="fa fa-asterisk text-danger" aria-hidden="true"></i></strong> información requerida...</div>
    <form action="#" id="frmAddPerson" name="frmAddPerson" autocomplete="off" novalidate>
        <div class="form-row">            
            <div class="col-12">
                <label for="nombres" class='requiredMark mb-0'>Nombres(s)</label>
                <input type="text" id="nombres" name='nombres' class="form-control required" maxlength="100" required>                            
            </div>
            <div class="col-12">
                <label for="ap1" class='requiredMark mb-0'>Primer Apellido</label>
                <input type="text" id="ap1" name='ap1' class="form-control required" maxlength="100" required>                            
            </div>
            <div class="col-12">
                <label for="ap2" class='mb-0'>Segundo Apellido</label>
                <input type="text" id="ap2" name='ap2' class="form-control" maxlength="100">
            </div>
        </div>        
    </form>
</div>

<div id="sectionAddRol" class="d-none">
    <h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> Agregar rol</h3>
    <div class='text-right'><strong><i class="fa fa-asterisk text-danger" aria-hidden="true"></i></strong> información requerida...</div>
    <form action="#" id="frmAddRol" name="frmAddRol" autocomplete="off" novalidate>
        <div class="form-row">            
            <div class="col-12">
                <label for="tag" class='requiredMark mb-0'>Rol</label>
                <input type="text" id="tag" name='tag' class="form-control required" maxlength="255" required>                            
            </div>
            <div class="col-12">
                <label for="rolDescrip" class='requiredMark mb-0'>Descripción</label>
                <input type="text" id="rolDescrip" name='rolDescrip' class="form-control required" maxlength="255" required>                            
            </div>            
        </div>        
    </form>
</div>

<div id="sectionEditUser" class="d-none">
    <h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> Editar usuario</h3>
    <form action="#" id="frmEditUser" name="frmEditUser" autocomplete="off" novalidate>
        <input type="hidden" id="idUserUpdate" name="idUserUpdate" value="">
        <div class="form-row">
            <div class="col-12 col-md-6 my-2">
                <label for="passwordE" class='requiredMark mb-0'>Contraseña</label>
                <input type="password" id="passwordE" name='passwordE' class="form-control " minlength = 8 maxlength="15" >
            </div>
            <div class="col-12 col-md-6 my-2">
                <label for="confirmPasswordE" class='requiredMark mb-0'>Confirmar contraseña</label>
                <input type="password" id="confirmPasswordE" name='confirmPasswordE' class="form-control confirmPasswordE " minlength = 8 maxlength="15" >
            </div>
            <div class="col-12 my-2">
                <label for="rolesE" class='requiredMark mb-0'>Rol(es)</label>                            
                <div class="d-flex justify-content-start">
                    <select class="form-control required" style='max-height: 38px;' id="rolesE" name="rolesE[]" data-error="#err_rolesE" multiple required></select>
                    <div class="btn-group" role="group">
                        <a href="#" class="btnRefreshCmbRolE btn btn-outline-info" data-noouterclick="true" title='Actualizar lista'><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    </div>
                </div>
                <span id="err_rolesE" class='text-danger'></span>
            </div>
        </div>
    </form>
</div>

<div id="sectionDetailUser" class="d-none">
    <h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> Detalle de usuario</h3>
    <div class='row text-left'>
        <div class='col-12 col-md-6'>
            <h6 class="border-bottom">Id</h6>
            <p class='px-2 idData'></p>
        </div>
        <div class='col-12 col-md-6'>
            <h6 class="border-bottom">Usuario</h6>
            <p class='px-2 userData'></p>
        </div>
        <div class='col-12 col-md-6'>
            <h6 class="border-bottom">Nombre</h6>
            <p class='px-2 nameData'></p>
        </div>
        <div class='col-12 col-md-6'>
            <h6 class="border-bottom">Fecha de registro</h6>
            <p class='px-2 dateInsertData'></p>
        </div>
        <div class='col-12 col-md-6'>
            <h6 class="border-bottom">Activo</h6>
            <p class='px-2 activeData'></p>
        </div>
    </div>
</div>