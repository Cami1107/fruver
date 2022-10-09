

const usersTable = createApp({
  data() {
    return {
      store
    }
  },
  mounted() {
    console.log(`the component is now mounted.`)
    this.store.getAllUsers()
  }
})
usersTable.mount('#usersTable')