import React from 'react';
import ReactDOM from 'react-dom';

export default class ReactSearch extends React.Component {
  
  render() {
    
    return (
      <div className="well">
        <div className="row">
          <div className="col-sm-4 offset-sm-7">
            <input type="text" autoComplete="off" 
              id="search" ref="newSearch"  
              className="form-control input-lg" 
              placeholder="Enter Name, Email, Book Name Here" 
            />
          </div>

          <div className="col-sm-1">
            <button className="btn btn-secondary">Search</button>
          </div>
        </div>
      </div>
    );

  }
}