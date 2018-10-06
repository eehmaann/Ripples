import React, { Component } from 'react';
import ReactDOM from 'react-dom';

/* Main Component */
class Definer extends Component {

  constructor() {
  
    super();
    //Initialize the state in the constructor
    this.state = {
        definers: [],
    }
  }
  /*componentDidMount() is a lifecycle method
   * that gets called after the component is rendered
   */
  componentDidMount() {
    /* fetch API in action */
    fetch('/api/definers')
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
      if (definer.category_type == this.props.definerName){
        return (
            <li style={listStyle} href='/definers/${definers.id}' onClick={
                () =>this.handleClick(definer.name)}key={definer.id}>
                {definer.name} 
            </li>      
        );
      }
    })
  }



    
    handleClick(name) {
      alert(name);
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
                  <ul>
                    {this.renderDefiners() }
                  </ul> 

            </div> 

          </div>
              
        </div>
      
    );
  }
}

export default Definer;
