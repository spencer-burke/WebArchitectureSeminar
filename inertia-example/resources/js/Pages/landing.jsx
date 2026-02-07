import { Head, useForm } from '@inertiajs/react'

export default function Landing({ items }) {
    const { data, setData, post, processing } = useForm({
        name: '',
        description: '',
    });

    const handleSubmit = (e) => {
        e.preventDefault();
        post('/', {
            onSuccess: () => {
                setData({ name: '', description: '' }); // Clear form
            }
        });
    };

    return (
        <main className="container">
            <h1>Inertia Example</h1>

            <form onSubmit={handleSubmit}>
                <label htmlFor="name">Name:</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value={data.name}
                    onChange={e => setData('name', e.target.value)}
                />

                <label htmlFor="description">Description:</label>
                <input
                    type="text"
                    id="description"
                    name="description"
                    value={data.description}
                    onChange={e => setData('description', e.target.value)}
                />

                <input type="submit" value="Create Item" disabled={processing} />
            </form>

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
        </main>
    );
}
