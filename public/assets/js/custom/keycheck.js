function check_key() {
    var token = localStorage.getItem('JWTTKN');


    $.ajaxSetup({
        headers: {
            'Authorization': 'Bearer ' + token
        }
    })
    $.ajax({
        type: 'GET',
        url: 'https://workout.americanathleticsco.com/courses',
        success: function(data) {

            console.log(data);
            console.log('xxx');
        },
        error: function(err) {
            console.log(err);
            console.log('x2x');
            return "hello";
            // localStorage.removeItem('JWTTKN');
            // let url = "{{ route('login', ':id') }}";
            // url = url.replace(':id', id);
            // document.location.href = url;

        }
    });



}