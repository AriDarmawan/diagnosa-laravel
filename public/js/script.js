let app = new Vue ({
   el:'#app',
   data: {
       chooseInput: null
   },

   methods : {
        setInput()
        {
            if (this.chooseInput == 1)
            {
                this.chooseInput = null
            }
            else
            {
                this.chooseInput = 1
            }
        }
   }
});