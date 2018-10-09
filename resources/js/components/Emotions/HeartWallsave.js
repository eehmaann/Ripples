import React, { Component } from 'react';
import ReactDOM from 'react-dom';
//import IntegerBox from './IntegerBox';
//import SubstanceBox from './SubstanceBox';


class HeartWall extends Component {
  constructor(){

    super();

      // this.state = {
        //detail:'',
        //distance:'',
        //substance:'',
      //};

     //this.onDistanceChange= this.onDistanceChange.bind(this);
     //this.onSubstanceChange= this.onSubstanceChange.bind(this);
  
  }
   // onDistanceChange(event) {
     // event.preventDefault();
     // this.setState({distance: event.target.value});
   // }

    //onSubstanceChange(event) {
      //event.preventDefault();
      //this.setState({substance: event.target.value});
    //}


  render() {
    return(
      <div>
       //<p>How long is the Heart Wall Miles ?</p> <IntegerBox numberChange={this.onDistanceChange}/> 
      // <p> What is the Heart Wall made of?</p> <SubstanceBox substanceChange={this.onSubstanceChange}/>
       <p> Test</p>
      </div>
    );
  }  
}

export default HeartWall;

if (document.getElementById('heartwall2')) {
    ReactDOM.render(<Heartwall/>, document.getElementById('heartwall2'));
}