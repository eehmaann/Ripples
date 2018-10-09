import React, { Component } from 'react';
import ReactDOM from 'react-dom';

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

  renderEmotionSection(row, col){
    return this.state.emotions.map(emotion =>{
      if (emotion.row_name ==row && emotion.col_name == col ){
        return (
        <li onClick={
            () =>this.props.action({emotion.name})}key={emotion.id} >
                { emotion.name}
        </li> 
        );
      }
    })
  }
  render() {
    return (
        <div>
          {if (this.props.row=="Yes")
            <p>Column A</p>
            for(var i=1; i < 7; i++){
              <p>Row {i}</p>
              <ul> 
                {this.renderEmotionGroup(i, 1) }
              </ul>
            }

            <p> Column B</p>
            for(var i=1; i < 7; i++){
              <p>Row {i}</p>
              <ul> 
                {this.renderEmotionGroup(i, 2) }
              </ul>
            }
          
          } else{
            <p> Row {this.props.row}</p>
            <p> Column A</p>
            <ul>
              {this.renderEmotionGroup(this.props.row, 1) }
            </ul>
            <p> Column B </p>
            <ul>
              {this.renderEmotionGroup(this.props.row, 2) }
            </ul>
          }
        </div> 
    );
  }
}
