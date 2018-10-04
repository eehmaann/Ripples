import React, { Component } from 'react';
import ReactDOM from 'react-dom';
//import Emotoin from 'Emotion';

/* Emotion Component */
export default class EmotionGroup extends Component {
 
  constructor(props) {
   
    super(props);
    //Initialize the state in the constructor
    this.state = {
        emotions: [],
    }
  }


  componentDidMount() {
    /* fetch API in action */
    fetch('/api/emotions')
        .then(response => {
            return response.json();
        })
        .then(emotions => {
            //Fetched product is stored in the state
            this.setState({ emotions });
        });
  }
 
 renderEmotions() {
    return this.state.emotions.map(emotion => {
        return (
            <li key={emotion.id} >
                { emotion.name} 
            </li>      
        );
    })
  }

  renderEmotionGroup(row, col){
    return this.state.emotions.map(emotion =>{
      if (emotion.row_name ==row && emotion.col_name == col ){
        return (
        <li onClick={
            () =>this.handleClick(emotion)}key={emotion.id} >
                { emotion.name}
        </li>    
        );
      }
    })
  }
  render() {
       const testrow=2;
    return (
        <div>
          <p> This is where emotions will be</p>
              <p> Coloumn A</p>
              <ul>
                {this.renderEmotionGroup(testrow-1, 1) }
                {this.renderEmotionGroup(testrow, 1) }
              </ul>
              <p> Column B </p>
              <ul>
                {this.renderEmotionGroup(testrow-1, 2)}
                {this.renderEmotionGroup(testrow, 2)}
              </ul>
        </div> 
       
    );

  }
}


if (document.getElementById('emotion')) {
    ReactDOM.render(<EmotionGroup/>, document.getElementById('emotion'));
}