<template>
  <div>
    <h1>{{ title }}</h1>
    <ul>
      <li
        v-for="task in tasks"
        :key="task.id"
        :class="{ completed: task.completed }"
      >
        <input
          @click="toggleCompleted(task.id)"
          type="checkbox"
          :checked="task.completed"
        />
        {{ task.name }} - {{ task.due }}
      </li>
    </ul>
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
    toggleCompleted(id) {
      let task = this.tasks.find(task => task.id === id);
      task.completed = !task.completed;
    }
  }
};
</script>

<style scoped>
.completed {
  text-decoration: line-through;
  color: #4fc08d;
  border: 0;
}

.completed:hover {
  background: white;
  color: #4fc08d;
}

h1 {
  background: #4fc08d;
  color: white;
  padding: 1rem;
  text-align: center;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  font-size: 1.5rem;
  color: #333;
}

li {
  margin: 1rem;
  position: relative;
  top: 0.5em;
  border-bottom: 1px solid #4fc08d;
  padding: 10px;
}

li:hover {
  background: #4fc08d;
  color: white;
  transition: 0.5s;
}

li:hover {
  background: #4fc08d;
  color: white;
  transition: 0.5s;
}
</style>
