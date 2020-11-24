<template>
  <div>
    <h1>home</h1>
    <p>{{ title }}</p>
  </div>
</template>

<script>
export default {
  name: "home",

  comments: {
    //  Alkomponensek (child), amiket ez a komponens használ
  },

  data() {
    // statikus adatok
    return {
      title: "Home",
      tasks: [
        {
          id: 1,
          name: "First test task",
          completed: false,
          due: "2020-11-24"
        },
        {
          id: 2,
          name: "Second test task",
          completed: true,
          due: "2020-12-04"
        },
        {
          id: 3,
          name: "Third test task",
          completed: false,
          due: "2020-11-25"
        },
        {
          id: 4,
          name: "Fourth test task",
          completed: false,
          due: "2020-12-31"
        }
      ]
    };
  },

  computed: {
    //  dinamikus adatok
  },

  created() {
    //  ng oninit()
  },

  methods: {
    //  komponens használata közben használt methodok
  }
};
</script>
