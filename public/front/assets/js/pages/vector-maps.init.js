/*
Template Name: Skote - Responsive Bootstrap 4 Admin Dashboard
Author: Themesbrand
Version: 2.0
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Vector Maps init Js File
*/


!function ($) {
    "use strict";


    var VectorMap = function () {
    };

    VectorMap.prototype.init = function () {
        var result=[];
        var result_ = [];

        $.ajax({
            type: "get",
            url : "admin/locate",
            dataType : "json",
            success: function (data) {
                $.each(data,function (i,obj){
                    var object={}
                    var  coord=[obj['latitude'],obj['longitude']]
                    var country=obj['city']
                    object['latLng']=coord
                    object['name']=country
                   // var object='{latLng:['+coord+'],name:'+country+'}'
                    result_.push(object)


                })

                // console.log(result_)

                //various examples
                $('#world-map-markers').vectorMap({
                    map: 'world_mill_en',
                    normalizeFunction: 'polynomial',
                    hoverOpacity: 0.7,
                    hoverColor: false,
                    regionStyle: {
                        initial: {
                            fill: '#d4dadd'
                        }
                    },
                    markerStyle: {
                        initial: {
                            r: 9,
                            'fill': '#556ee6',
                            'fill-opacity': 0.9,
                            'stroke': '#fff',
                            'stroke-width': 7,
                            'stroke-opacity': 0.4
                        },

                        hover: {
                            'stroke': '#fff',
                            'fill-opacity': 1,
                            'stroke-width': 1.5
                        }
                    },
                    backgroundColor: 'transparent',
                    markers:result_
                });

                $('#usa-vectormap').vectorMap({
                    map: 'us_merc_en',
                    backgroundColor: 'transparent',
                    regionStyle: {
                        initial: {
                            fill: '#556ee6'
                        }
                    }
                });

                $('#india-vectormap').vectorMap({
                    map: 'in_mill_en',
                    backgroundColor: 'transparent',
                    regionStyle: {
                        initial: {
                            fill: '#556ee6'
                        }
                    }
                });

                $('#australia-vectormap').vectorMap({
                    map: 'au_mill_en',
                    backgroundColor: 'transparent',
                    regionStyle: {
                        initial: {
                            fill: '#556ee6'
                        }
                    }
                });

                $('#chicago-vectormap').vectorMap({
                    map: 'us-il-chicago_mill_en',
                    backgroundColor: 'transparent',
                    regionStyle: {
                        initial: {
                            fill: '#556ee6'
                        }
                    }
                });

                $('#uk-vectormap').vectorMap({
                    map: 'uk_mill_en',
                    backgroundColor: 'transparent',
                    regionStyle: {
                        initial: {
                            fill: '#556ee6'
                        }
                    }
                });

                $('#canada-vectormap').vectorMap({
                    map: 'ca_lcc_en',
                    backgroundColor: 'transparent',
                    regionStyle: {
                        initial: {
                            fill: '#556ee6'
                        }
                    }
                });

            },
        });





    },
        //init
        $.VectorMap = new VectorMap, $.VectorMap.Constructor =
        VectorMap
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.VectorMap.init()
    }(window.jQuery);
