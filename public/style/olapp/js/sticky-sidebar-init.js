eduappgt.StickySidebar=function(){var i=$("#site-header");$(".eduappgt-sticky-sidebar").each(function(){new StickySidebar(this,{topSpacing:i.height(),bottomSpacing:0,containerSelector:!1,innerWrapperSelector:".sidebar__inner",resizeSensor:!0,stickyClass:"is-affixed",minWidth:0})})},$(document).ready(function(){eduappgt.StickySidebar()});