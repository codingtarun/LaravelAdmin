import React from "react";
import ReactDOM from "react-dom/client";
import "bootstrap/dist/css/bootstrap.min.css";
import Container from "react-bootstrap/Container";

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
    <React.StrictMode>
        <App />
    </React.StrictMode>
);

function App() {
    return (
        <div>
            <Container fluid className="m-0 p-0">
                <h1 className="text-center">HELLO</h1>
            </Container>
        </div>
    );
}

export default App;
