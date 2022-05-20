class Resume{
    constructor(general,name, label, email,phone,location){
        this.general = general;
        this.name = name;
        this.label = label;
        this.email = email;
        this.phone = phone;
        this.location = location;
}
}
async function load_JSON() {
    const {default:data} = await import('./resume.json',{    
        assert:{
            type:"json"
        }
    });
    Some_data(data)
       
}
load_JSON();