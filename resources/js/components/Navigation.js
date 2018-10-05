import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class Locator extends Component {

  constructor() {
  
    super();
    //Initialize the state in the constructor
    this.state = {
        locators: [],
        definers:[],
        currentCategory: 'Base'
    }
  }
  
  componentDidMount() {
    /* fetch API in action */
    fetch('/api/locators')
        .then(response => {
            return response.json();
        })
        .then(locators => {
            //Fetched product is stored in the state
            this.setState({ locators });
        });
        // definer fetch
      fetch('/api/definers')
        .then(response => {
            return response.json();
        })
        .then(definers => {
            //Fetched product is stored in the state
            this.setState({ definers });
        });
  }

 renderLocators() {
        const listStyle = {
            listStyle: 'none',
            fontSize: '18px',
            lineHeight: '1.8em',
        }
    return this.state.locators.map(locator => {
      if (locator.category_type == this.state.currentCategory ){
        return (
            <li style={listStyle} onClick={
                () =>this.handleClick(locator.name)}key={locator.id} value={locator.category_type}>
                { locator.name } 
            </li>      
        );
      }
    })
  }

  renderDefiners() {
        const listStyle = {
            listStyle: 'none',
            fontSize: '18px',
            lineHeight: '1.8em',
        }
    return this.state.definers.map(definer => {
      if (definer.category_type == this.state.currentCategory ){
        return (
            <li style={listStyle} key={definer.id} value={definer.category_type}>
                {definer.name} 
            </li>      
        );
      }
    })
  }



    
    handleClick(name) {
      this.setState({currentCategory:name});
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
                <h3> Locators </h3>
                  <ul>
                    {this.renderLocators() }
                  </ul> 

                  <h3> Definers </h3>
                  <ul>
                    {this.renderDefiners() }
                  </ul> 

            </div> 

          </div>
              
        </div>
      
    );
  }
}

export default Locator;


if (document.getElementById('silly')) {
    ReactDOM.render(<Locator />, document.getElementById('locator'));
}