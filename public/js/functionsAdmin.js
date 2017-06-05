

//users
    function chargerUserDates(){
         document.getElementById('btnSaveUser').style.display = 'none';
        document.getElementById('btnUpdateUser').style.display = 'block';

        document.getElementById('nameUser').value = 'Kevin';
        document.getElementById('firstname1User').value = 'Campos';
        document.getElementById('firstname2User').value = 'R';
        document.getElementById('emailUser').value = 'k@gmail.com';
        document.getElementById('passUser').value = '12345678';
        document.getElementById('rollUser').value = 'Administrador';
    }
    function updateUser(){
         alert('actualizando usuario');
         document.getElementById('btnUpdate').style.display = 'none';
        document.getElementById('btnSave').style.display = 'block';

        document.getElementById('nameUser').value = '';
        document.getElementById('firstname1User').value = '';
        document.getElementById('firstname2User').value = '';
        document.getElementById('emailUser').value = '';
        document.getElementById('passUser').value = '';
        document.getElementById('rollUser').value = '';
    }
    function saveUser(){
         alert('guardando usuario');
        document.getElementById('nameUser').value = '';
        document.getElementById('firstname1User').value = '';
        document.getElementById('firstname2User').value = '';
        document.getElementById('emailUser').value = '';
        document.getElementById('passUser').value = '';
        document.getElementById('rollUser').value = '';
    }
    function deleteUser(){
         alert('eliminando usuario ');
    }

    //Places
    function chargerPlaceDates(){
         document.getElementById('btnSavePlace').style.display = 'none';
        document.getElementById('btnUpdatePlace').style.display = 'block';

        document.getElementById('namePlace').value = 'Casa de Bety';
        document.getElementById('informationPlace').value = 'Los mejores almuerzos del cantón';
        document.getElementById('categoryPlace').value = 'Categoria 3';
        document.getElementById('typeActivityPlace').value = 'Actividad 4';
        document.getElementById('sloganPlace').value = 'Para servirle...';
        document.getElementById('valuePlace').value = '2000';
        document.getElementById('linkWebPlace').value = 'http://bety.com';
        document.getElementById('linkFacebookPlace').value = 'http://facebook/bety.com';
        document.getElementById('latitudePlace').value = '9.123456';
        document.getElementById('longitudePlace').value = '5.123456';
    }
    function updatePlace(){
         alert('actualizando lugar');
         document.getElementById('btnUpdate').style.display = 'none';
        document.getElementById('btnSave').style.display = 'block';

        document.getElementById('namePlace').value = '';
        document.getElementById('informaionPlace').value = '';
        document.getElementById('categoryPlace').value = '';
        document.getElementById('TypeActivityPlace').value = '';
        document.getElementById('sloganPlace').value = '';
        document.getElementById('valuePlace').value = '';
        document.getElementById('linkWebPlace').value = '';
        document.getElementById('linkFacebookPlace').value = '';
        document.getElementById('latitude').value = '';
        document.getElementById('longitude').value = '';
    }
    function savePlace(){
         alert('guardando lugar');
         document.getElementById('namePlace').value = '';
        document.getElementById('informaionPlace').value = '';
        document.getElementById('categoryPlace').value = '';
        document.getElementById('TypeActivityPlace').value = '';
        document.getElementById('sloganPlace').value = '';
        document.getElementById('valuePlace').value = '';
        document.getElementById('linkWebPlace').value = '';
        document.getElementById('linkFacebookPlace').value = '';
        document.getElementById('latitude').value = '';
        document.getElementById('longitude').value = '';
    }
    function deletePlace(){
         alert('eliminando lugar ');
    }

    //typeActivity
    function chargerTypeActivityDates(){
         document.getElementById('btnSaveTypeActivity').style.display = 'none';
        document.getElementById('btnUpdateTypeActivity').style.display = 'block';

        document.getElementById('nameTypeActivity').value = 'Senderismo';
        document.getElementById('descriptionTypeActivity').value = 'Senderismo de montaña';
        
    }
    function updateTypeActivity(){
         alert('actualizando tipo de actividad');
         document.getElementById('btnUpdateTypeActivity').style.display = 'none';
        document.getElementById('btnSaveTypeActivity').style.display = 'block';

        document.getElementById('nameTypeActivity').value = '';
        document.getElementById('descriptionTypeActivity').value = '';
       
    }
    function saveTypeActivity(){
         alert('guardando tipo de actividad');
        document.getElementById('nameTypeActivity').value = '';
        document.getElementById('descriptionTypeActivity').value = '';
       
    }
    function deleteTypeActivity(){
         alert('eliminando tipo de actividad ');
    }

    //CategoryPlace
    function chargerCategoryPlaceDates(){
         document.getElementById('btnSaveCategoryPlace').style.display = 'none';
        document.getElementById('btnUpdateCategoryPlace').style.display = 'block';

        document.getElementById('nameCategoryPlace').value = 'Senderismo';
        document.getElementById('descriptionCategoryPlace').value = 'Senderismo de montaña';
        
    }
    function updateCategoryPlace(){
         alert('actualizando categoria');
         document.getElementById('btnUpdateCategoryPlace').style.display = 'none';
        document.getElementById('btnSaveCategoryPlace').style.display = 'block';

        document.getElementById('nameCategoryPlace').value = '';
        document.getElementById('descriptionCategoryPlace').value = '';
       
    }
    function saveCategoryPlace(){
         alert('guardando categoria');
        document.getElementById('nameCategoryPlace').value = '';
        document.getElementById('descriptionCategoryPlace').value = '';
       
    }
    function deleteCategoryPlace(){
         alert('eliminando categoria');
    }