import { useState } from 'react'
import './App.css'

interface Item {
    id: number
    name: string
    description: string
}

function App() {
    const [items, setItems] = useState<Item[]>([]);

    function getItems(): void {
        fetch('http://localhost:8000/api/items')
            .then(res => res.json())
            .then(data => setItems(data));
    }

    return (
    <>
        <button onClick={getItems}>
            Get Items from API
        </button>

        {items.length > 0 && (
            <div>
                {items.map(item => (
                    <div key={item.id}>
                        <h4>Id: {item.id}</h4>
                        <p><b>Name:</b> {item.name}</p>
                        <p><b>Description:</b> {item.description}</p>
                    </div>
                ))}
            </div>
        )}
    </>
    )
}

export default App
