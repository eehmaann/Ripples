import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import UnderlyingChoiceDisplay from './underlyerChoice/UnderlyingChoiceDisplay';
/* Main Component */
class Organ extends Component {

  constructor() {
  
    super();
    //Initialize the state in the constructor
    this.state = {
        definers: [],
        statement:''
    }
  }
  /*componentDidMount() is a lifecycle method
   * that gets called after the component is rendered
   */
  componentDidMount() {
    /* fetch API in action */
    fetch('/api/definers/{definer}')
        .then(response => {
            return response.json();
        })
        .then(definers => {
            //Fetched product is stored in the state
            this.setState({ definers });
        });
  }

 renderDefiners() {
        const listStyle = {
            listStyle: 'none',
            fontSize: '18px',
            lineHeight: '1.8em',
        }
    return this.state.definers.map(definer => {
      statment={name}+" is unhappy";
        return (
            <UnderlyingChoiceDisplay/>
        );
    })
  }

  render() {

   const mainDivStyle =  {
        display: "flex",
        flexDirection: "row"
    }
    
    const divStyle = {
       
        justifyContent: "flex-start",
        padding: '10px',
        width: '35%',
        background: '#f0f0f0',
        padding: '20px 20px 20px 20px',
        margin: '30px 10px 10px 30px'
        
    }

    return (
        <div>
          <div style= {mainDivStyle}>
            <div style={divStyle}>
              {this.renderDefiners() }
            </div> 
          </div>              
        </div>
      
    );
  }
}

export default Organ;

if (document.getElementById('organ')) {
    ReactDOM.render(<Organ />, document.getElementById('organ'));
}