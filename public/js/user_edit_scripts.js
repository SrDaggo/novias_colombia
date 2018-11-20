function preselect_gender_radio() {

    var gender = '<?php echo $user->gender; ?>';
    var radio = document.getElementsByName('gender');
    for (i = 0; i < radio.length; i++) {

        if (radio[i].value == gender) {
            radio[i].checked = true;
        }
    }

}
window.addEventListener('load', preselect_gender_radio);




function preselect_partner_radio() {

    var partner_gender = '<?php echo $user->partner_gender; ?>';
    var radio = document.getElementsByName('partner_gender');
    for (i = 0; i < radio.length; i++) {

        if (radio[i].value == partner_gender) {
            radio[i].checked = true;
        }
    }
}
window.addEventListener('load', preselect_partner_radio);




function preselect_wedding_color_select() {

    var color = '<?php echo $user->wedding_color; ?>';
    var select = document.getElementById('select-wedding-color');
    select.value = color;


}
window.addEventListener('load', preselect_wedding_color_select);




function preselect_wedding_style_select() {

    var style = '<?php echo $user->wedding_style; ?>';
    var select = document.getElementById('select-wedding-style');
    select.value = style;
}
window.addEventListener('load', preselect_wedding_style_select);




function preselect_wedding_weather_select() {

    var weather = '<?php echo $user->wedding_weather; ?>';
    var select = document.getElementById('select-wedding-weather');
    select.value = weather;
}
window.addEventListener('load', preselect_wedding_weather_select);




function preselect_wedding_municipio_select() {

    var municipio = '<?php echo $user->wedding_municipio_id; ?>';
    var select = document.getElementById('municipio-searcher');

    select.value = municipio;
}
window.addEventListener('load', preselect_wedding_municipio_select);





$(document).ready(function () {
    $('#municipio-searcher').select2();
});
