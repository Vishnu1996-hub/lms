import axios from 'axios'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'
import { Table } from 'react-bootstrap';

class Index extends Component {
    constructor () {
    super()
    this.state = {
        authors: []
    }
    }

    componentDidMount () {
    axios.get('/api/index').then(response => {
        this.setState({
        authors: response.data
        })
    })
    }

    render () {
    const { authors } = this.state
    return (
        <div className='container py-4'>
        <div className='row justify-content-center'>
            <div className='col-md-12'>
            <div className='card'>
                <div className='card-header'>All Authors</div>
                <div className='card-body'>
                    <Table striped bordered>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Author Name</th>
                                <th>Email</th>
                                <th>Badge</th>
                                <th>Total Books</th>
                                <th>Book's Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            {
                                authors.status == 0 ?
                                <tr>
                                    <td colSpan="6">{authors.msg}</td>
                                </tr>
                                 : 
                                authors.map((author) =>
                                <tr>
                                    <td>{author.id}</td>
                                    <td>{author.name}</td>
                                    <td>{author.email}</td>
                                    {/* <td>{"₹"+item.price}</td> */}
                                    <td>{author.badges}</td>
                                    <td>{author.total_books}</td>
                                    <td>{author.books}</td>
                                </tr>
                            )
                            }
                        </tbody>
                    </Table>
                </div>
            </div>
            </div>
        </div>
        </div>
    )
    }
}

export default Index