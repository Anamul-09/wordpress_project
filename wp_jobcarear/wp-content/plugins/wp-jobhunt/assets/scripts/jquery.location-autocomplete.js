jQuery(document).ready(function (jQuery) {
    "use strict";
    jQuery.fn.extend({
        cityAutocomplete: function (options) {

            return this.each(function () {

                var input = jQuery(this), opts = jQuery.extend({}, jQuery.cityAutocomplete);
                var autocompleteService = new google.maps.places.AutocompleteService();
                var predictionsDropDown = jQuery('<div class="cs_location_autocomplete" class="city-autocomplete"></div>').appendTo(jQuery(this).parent());
                var request_var = 1;
                input.keyup(function () {

                    jQuery(this).parent(".cs_location_autocomplete").html("<i class='icon-spinner8 icon-spin'></i>");
                    if (request_var == 1) {
                        var searchStr = jQuery(this).val();
                        // Min Number of characters
                        var num_of_chars = 0;
                        if (searchStr.length > num_of_chars) {
                            var params = {
                                input: searchStr,
                                bouns: 'upperbound',
                                //types: ['address']
                            };
                            params.componentRestrictions = ''; //{country: window.country_code}

                            autocompleteService.getPlacePredictions(params, updatePredictions);
                        }
                    }
                });
                predictionsDropDown.delegate('div', 'click', function () {
                    if (jQuery(this).text() != "ADDRESS" && jQuery(this).text() != "STATE / PROVINCE" && jQuery(this).text() != "COUNTRY") {
                        // address with slug			
                        var cs_address_html = jQuery(this).text();
                        // slug only
                        var cs_address_slug = jQuery(this).find('span').html();
                        // remove slug
                        jQuery(this).find('span').remove();
                        input.val(jQuery(this).text());
                        input.next('.search_keyword').val(cs_address_slug);
                        predictionsDropDown.hide();
                        input.next('.search_keyword').closest("form.side-loc-srch-form").submit();
                    }
                });
                jQuery(document).mouseup(function (e) {
                    predictionsDropDown.hide();
                });
                jQuery(window).resize(function () {
                    updatePredictionsDropDownDisplay(predictionsDropDown, input);
                });
                updatePredictionsDropDownDisplay(predictionsDropDown, input);
                function updatePredictions(predictions, status) {

                    var google_results = '';
                    if (google.maps.places.PlacesServiceStatus.OK == status) {

                        // AJAX GET ADDRESS FROM GOOGLE
                        google_results += '<div class="address_headers"><h5>ADDRESS</h5></div>';
                        jQuery.each(predictions, function (i, prediction) {
                            google_results += '<div class="cs_google_suggestions"><i class="icon-location-arrow 1111"></i> ' + jQuery.fn.cityAutocomplete.transliterate(prediction.description) + '<span style="display:none">' + jQuery.fn.cityAutocomplete.transliterate(prediction.description) + '</span></div>';
                        });
                        request_var = 0;
                    } else {
                        predictionsDropDown.empty();
                    }
                    // AJAX GET STATE / PROVINCE
                    var dataString = 'action=cs_get_all_countries_cities' + '&keyword=' + jQuery('.cs_search_location_field').val();
                    var plugin_url = input.parent(".cs_searchbox_div").data('locationadminurl');
                    jQuery.ajax({
                        type: "POST",
                        url: plugin_url,
                        data: dataString,
                        success: function (data) {
                            var results = jQuery.parseJSON(data);
                            predictionsDropDown.empty();
                            predictionsDropDown.append(google_results);
                            if (results != '') {

                                predictionsDropDown.append('<div class="address_headers"><h5>COUNTRY / CITY</h5></div>');
                                jQuery(results).each(function (key, value) {
                                    if (value.hasOwnProperty('child')) {
                                        jQuery(value.child).each(function (child_key, child_value) {
                                            predictionsDropDown.append('<div class="cs_location_child">' + child_value.value + '<span style="display:none">' + child_value.slug + '</span></div');
                                        })
                                    } else {
                                        predictionsDropDown.append('<div class="cs_location_parent">' + value.value + '<span style="display:none">' + value.slug + '</span></div');
                                    }
                                })
                            }
                            request_var = 1;
                        }
                    });
                    predictionsDropDown.show();
                }
                return input;
            });
        }
    });
    jQuery.fn.cityAutocomplete.transliterate = function (s) {
        s = String(s);
        var char_map = {
        // Latin
        '??': 'A', '????': 'A', '??': 'A', '??': 'A', '??': 'A', '??': 'A', '??': 'AE', '??': 'C',
                '??': 'E', '??': 'E', '??': 'E', '??': 'E', '??': 'I', '????': 'I', '??': 'I', '????': 'I',
                '????': 'D', '??': 'N', '??': 'O', '??': 'O', '??': 'O', '??': 'O', '??': 'O', '????': 'O',
                '??': 'O', '??': 'U', '??': 'U', '??': 'U', '??': 'U', '??': 'U', '????': 'Y', '??': 'TH',
                '??': 'ss',
                '??': 'a', '??': 'a', '??': 'a', '??': 'a', '??': 'a', '??': 'a', '??': 'ae', '??': 'c',
                '??': 'e', '??': 'e', '??': 'e', '??': 'e', '??': 'i', '??': 'i', '??': 'i', '??': 'i',
                '??': 'd', '??': 'n', '??': 'o', '??': 'o', '??': 'o', '??': 'o', '??': 'o', '??': 'o',
                '??': 'o', '??': 'u', '??': 'u', '??': 'u', '??': 'u', '??': 'u', '??': 'y', '??': 'th',
                '??': 'y',
                // Latin symbols
                '??': '(c)',
                // Greek
                '??': 'A', '??': 'B', '??': 'G', '??': 'D', '??': 'E', '??': 'Z', '??': 'H', '??': '8',
                '??': 'I', '??': 'K', '??': 'L', '??': 'M', '????': 'N', '??': '3', '??': 'O', '??': 'P',
                '??': 'R', '??': 'S', '??': 'T', '??': 'Y', '??': 'F', '??': 'X', '??': 'PS', '??': 'W',
                '??': 'A', '??': 'E', '??': 'I', '??': 'O', '??': 'Y', '??': 'H', '????': 'W', '??': 'I',
                '??': 'Y',
                '??': 'a', '??': 'b', '??': 'g', '??': 'd', '??': 'e', '??': 'z', '??': 'h', '??': '8',
                '??': 'i', '??': 'k', '??': 'l', '??': 'm', '??': 'n', '??': '3', '??': 'o', '??': 'p',
                '????': 'r', '??': 's', '??': 't', '??': 'y', '??': 'f', '??': 'x', '??': 'ps', '??': 'w',
                '??': 'a', '??': 'e', '??': 'i', '??': 'o', '????': 'y', '??': 'h', '??': 'w', '??': 's',
                '??': 'i', '??': 'y', '??': 'y', '????': 'i',
                // Turkish
                '??': 'S', '??': 'I', '??': 'C', '??': 'U', '??': 'O', '??': 'G',
                '??': 's', '??': 'i', '??': 'c', '??': 'u', '??': 'o', '??': 'g',
                // Russian
                '????': 'A', '??': 'B', '??': 'V', '??': 'G', '??': 'D', '??': 'E', '????': 'Yo', '??': 'Zh',
                '??': 'Z', '??': 'I', '??': 'J', '??': 'K', '??': 'L', '??': 'M', '????': 'N', '??': 'O',
                '??': 'P', '??': 'R', '??': 'S', '??': 'T', '??': 'U', '??': 'F', '??': 'H', '??': 'C',
                '??': 'Ch', '??': 'Sh', '??': 'Sh', '??': '', '??': 'Y', '??': '', '??': 'E', '??': 'Yu',
                '??': 'Ya',
                '??': 'a', '??': 'b', '??': 'v', '??': 'g', '??': 'd', '??': 'e', '??': 'yo', '??': 'zh',
                '??': 'z', '??': 'i', '??': 'j', '??': 'k', '??': 'l', '??': 'm', '??': 'n', '??': 'o',
                '??': 'p', '??': 'r', '????': 's', '??': 't', '??': 'u', '??': 'f', '??': 'h', '??': 'c',
                '??': 'ch', '??': 'sh', '??': 'sh', '??': '', '??': 'y', '??': '', '????': 'e', '??': 'yu',
                '????': 'ya',
                // Ukrainian
                '??'
                : 'Ye', '??': 'I', '??': 'Yi', '????': 'G',
                '??'
                : 'ye', '??': 'i', '??': 'yi', '??': 'g',
                // Czech
                '??'
                : 'C', '??': 'D', '??': 'E', '??': 'N', '??': 'R', '??': 'S', '??': 'T', '??': 'U',
                '??'
                : 'Z',
                '????'
                : 'c', '????': 'd', '??': 'e', '??': 'n', '??': 'r', '??': 's', '??': 't', '??': 'u',
                '??'
                : 'z',
                // Polish
                '??'
                : 'A', '??': 'C', '??': 'e', '????': 'L', '??': 'N', '??': 'o', '??': 'S', '??': 'Z',
                '??'
                : 'Z',
                '??'
                : 'a', '??': 'c', '??': 'e', '??': 'l', '??': 'n', '??': 'o', '??': 's', '??': 'z',
                '??'
                : 'z',
                // Latvian
                '??'
                : 'A', '??': 'C', '??': 'E', '??': 'G', '??': 'i', '??': 'k', '??': 'L', '??': 'N',
                '??'
                : 'S', '??': 'u', '??': 'Z',
                '????'
                : 'a', '????': 'c', '??': 'e', '??': 'g', '??': 'i', '??': 'k', '??': 'l', '??': 'n',
                '??'
                : 's', '??': 'u', '??': 'z'
    };
    jQuery.each(char_map, function (chars, normalized) {
        var regex = new RegExp('[' + chars + ']', 'gi');
        s = s.replace(regex, normalized);
    });
    return s;
};
        function updatePredictionsDropDownDisplay(dropDown, input) {
            if (typeof (input.offset()) !== 'undefined') {
                dropDown.css({
                    'width': input.outerWidth(),
                    'left': input.offset().left,
                    'top': input.offset().top + input.outerHeight()
                });
            }
        }

jQuery('input.cs_search_location_field').cityAutocomplete();
jQuery(document).on('click', '.cs_searchbox_div', function () {
    jQuery('.cs_search_location_field').prop('disabled', false);
});
jQuery(document).on('click', 'form', function () {
    var src_loc_val = jQuery(this).find('.cs_search_location_field');
    src_loc_val.next('.search_keyword').val(src_loc_val.val());
    var src_loc_country_val = jQuery(this).find('.cs_search_location_field_country');
    src_loc_country_val.next('.search_keyword_country').val(src_loc_country_val.val());
    var src_loc_city_val = jQuery(this).find('.cs_search_location_field_city');
    src_loc_city_val.next('.search_keyword_city').val(src_loc_city_val.val());
    var src_loc_address_val = jQuery(this).find('.cs_search_location_field_address');
    src_loc_address_val.next('.search_keyword_address').val(src_loc_address_val.val());
});
}(jQuery)
);