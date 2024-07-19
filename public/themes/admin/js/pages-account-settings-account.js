"use strict";
document.addEventListener("DOMContentLoaded", function (e) {
  {
    const o = document.querySelector("#formAccountSettings"),
      a = document.querySelector("#formAccountDeactivation"),
      i = a.querySelector(".deactivate-account"),
      s =
        (o &&
          FormValidation.formValidation(o, {
            fields: {
              firstName: {
                validators: {
                  notEmpty: { message: "Please enter first name" },
                },
              },
              lastName: {
                validators: { notEmpty: { message: "Please enter last name" } },
              },
            },
            plugins: {
              trigger: new FormValidation.plugins.Trigger(),
              bootstrap5: new FormValidation.plugins.Bootstrap5({
                eleValidClass: "",
                rowSelector: ".col-md-6",
              }),
              submitButton: new FormValidation.plugins.SubmitButton(),
              autoFocus: new FormValidation.plugins.AutoFocus(),
            },
            init: (e) => {
              e.on("plugins.message.placed", function (e) {
                e.element.parentElement.classList.contains("input-group") &&
                  e.element.parentElement.insertAdjacentElement(
                    "afterend",
                    e.messageElement
                  );
              });
            },
          }),
        document.querySelector("#accountActivation"));
    a &&
      FormValidation.formValidation(a, {
        fields: {
          accountActivation: {
            validators: {
              notEmpty: {
                message: "Vui lòng xác nhận bạn muốn xóa tài khoản",
              },
            },
          },
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            eleValidClass: "",
          }),
          submitButton: new FormValidation.plugins.SubmitButton(),
          fieldStatus: new FormValidation.plugins.FieldStatus({
            onStatusChanged: function (e) {
              e && 1 == s.checked
                ? (i.removeAttribute("disabled", "disabled"),
                  i.classList.add("btn-danger"),
                  i.classList.remove("btn-secondary"))
                : i.setAttribute("disabled", "disabled");
            },
          }),
          autoFocus: new FormValidation.plugins.AutoFocus(),
        },
        init: (e) => {
          e.on("plugins.message.placed", function (e) {
            e.element.parentElement.classList.contains("input-group") &&
              e.element.parentElement.insertAdjacentElement(
                "afterend",
                e.messageElement
              );
          });
        },
      }),
      i &&
        (i.onclick = function () {
          if (1 == s.checked) {
            Swal.fire({
              text: "Bạn có chắc chắn muốn hủy kích hoạt tài khoản của mình không?",
              icon: "warning",
              showCancelButton: true,
              confirmButtonText: "Yes",
              customClass: {
                confirmButton: "btn btn-primary me-2 waves-effect waves-light",
                cancelButton: "btn btn-outline-secondary waves-effect",
              },
              buttonsStyling: false,
            }).then(function (result) {
              if (result.value) {
                Swal.fire({
                  icon: "success",
                  title: "Thành Công",
                  text: "Tập tin của bạn đã bị xóa.",
                  customClass: {
                    confirmButton: "btn btn-success waves-effect",
                    popup: "my-swal",
                  },
                });
              } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                  title: "Thất bại",
                  text: "Việc hủy kích hoạt đã bị hủy!!",
                  icon: "error",
                  customClass: {
                    confirmButton: "btn btn-success waves-effect",
                    popup: "my-swal",
                  },
                });
              }
            });
          }
        });

    var t = document.querySelector("#phoneNumber"),
      n = document.querySelector("#zipCode");
    t && new Cleave(t, { phone: !0, phoneRegionCode: "US" }),
      n && new Cleave(n, { delimiter: "", numeral: !0 });
    let e = document.getElementById("uploadedAvatar");
    const l = document.querySelector(".account-file-input"),
      c = document.querySelector(".account-image-reset");
    if (e) {
      const r = e.src;
      (l.onchange = () => {
        l.files[0] && (e.src = window.URL.createObjectURL(l.files[0]));
      }),
        (c.onclick = () => {
          (l.value = ""), (e.src = r);
        });
    }
  }
}),
  $(function () {
    var e = $(".select2");
    e.length &&
      e.each(function () {
        var e = $(this);
        select2Focus(e),
          e.wrap('<div class="position-relative"></div>'),
          e.select2({ dropdownParent: e.parent() });
      });
  });
