import React, { Component } from 'react';
import ReactDOM from 'react-dom';

/* Main Component */
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
  /*componentDidMount() is a lifecycle method
   * that gets called after the component is rendered
   */
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
                <h3> All products </h3>
                  <ul>
                    {this.renderLocators() }
                  </ul> 

            </div> 

          </div>
              
        </div>
      
    );
  }
}

export default Locator;


if (document.getElementById('locator')) {
    ReactDOM.render(<Locator />, document.getElementById('locator'));
}