$.validator.setDefaults({ignore:[":disabled"],errorClass:"text-danger",debug:!1,errorPlacement:function(e,r){var a=$(r).data("error");a?$(a).append(e):e.insertAfter(r)}});