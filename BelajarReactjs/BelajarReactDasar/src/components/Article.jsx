function Article() {
    const nama = "Nyoman";
    const hobi = ['makan ', 'tidur ', 'main game'];

    return (
        <>
            <div>{nama}</div>
            <div>{hobi.map(hobi => {
                return <>
                    <div>{hobi}</div>
                    <div>{hobi}</div>
                </>
            })}</div>
        </>
    )
}

export default Article; 