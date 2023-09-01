function requestAxios(name, data, func){
    axios.post('/wp-admin/admin-ajax.php?action=' + name, data)
    .then(function (response) {
        if(func) {
            func(response.data)
        }
    })
}






