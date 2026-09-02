const Genero = ({genero, imagem}) => {
  return (
            <div className="text-center w-48 shrink-0">
                <img className="w-full" src={imagem} alt={`Gênero músical: ${genero}`}/>
                <p className="text-zinc-300 font-bold mt-3 ">{genero}</p>
            </div>
  )
}

export default Genero
