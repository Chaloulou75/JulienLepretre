<template>
  <div>
    <div ref="paypal"></div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      loaded: false,
      product: {
        price: 2.9,
      },
    };
  },
  mounted: function () {
    const script = document.createElement("script");
    script.src =
      "https://www.paypal.com/sdk/js?client-id=AW-3zCvLBM2EPrkVxtBAR2jR3JtJrgt2I94vktbPk1AmDYQ-NrirWhjpSGdv6OKZuCJirN1fdqz9QJKc&currency=USD";
    script.addEventListener("load", this.setLoaded);
    document.body.appendChild(script);
  },
  methods: {
    setLoaded: function () {
      this.loaded = true;
      window.paypal
        .Buttons({
          style: {
            shape: "pill",
            color: "blue",
            layout: "vertical",
            label: "paypal",
          },
          createOrder: function (data, actions) {
            return actions.order.create({
              purchase_units: [
                {
                  amount: {
                    value: "2.9",
                  },
                },
              ],
            });
          },
          onApprove: function (data, actions) {
            return actions.order.capture().then(function (details) {
              alert(
                "Transaction completed by " +
                  details.payer.name.given_name +
                  "!"
              );
            });
          },
        })
        .render(this.$refs.paypal);
    },
  },
};
</script>
