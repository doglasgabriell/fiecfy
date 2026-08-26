const PlaylistCard = ({titulo, descricao, imagem}) => {
  return (
    <div className="bg-zinc-900 p-4 rounded-lg hover:bg-zinc-800 transition-colors cursor-pointer group w-48">
        <div className="relative mb-4">
            {/* IMAGEM*/}
            <img src={imagem} 
                alt="Descrição da playlist"
                className="w-full h-auto rounded-full shadow-lg "/>
            {/* Botão de Play*/}
            <button className="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity shadow-xl hover:scale-105"><span className="text-black font-bold">P</span> 
            </button>                
        </div>

        {/* Titulo */}
        <h3 className="font-bold text-white mb-1 truncade">{titulo}</h3>
        <p className="text-sm text-zinc-400 line-clamp-2">{descricao}</p>
    </div>
  )
}

export default PlaylistCard
