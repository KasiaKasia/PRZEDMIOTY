const getUserData = () => {
    return new Promise((resolve) => {
        setTimeout(()=> {
            console.log('1 get user');
            resolve(resolve)
        }, 600)
    })
}

const registerData = () => {
    return new Promise((resolve) => {
        setTimeout(()=> {
            console.log('2 registerData');
            resolve(resolve)
        }, 400)
    })
}

const sendEmail = () => {
    return new Promise((resolve) => {
        setTimeout(()=> {
            console.log('3 sendEmail');
            resolve(resolve)
        }, 500)
    })
}


/*
async  await to uproszczony zapis z then
*/

// getUserData()
//     .then(registerData )
//     .then(sendEmail)
//     .then(()=>{
//         console.log('emd !')
//     })
/*

1 get user
2 registerData
3 sendEmail
emd !

*/
// console.log('--------')
// console.log('--------')

// getUserData();
// registerData();
// sendEmail();
// console.log('emd !!!!!')

async function someAsyncFunction(){

      getUserData(); 
      registerData();
      sendEmail();
    console.log('async  await end !!!!!')
}
someAsyncFunction()