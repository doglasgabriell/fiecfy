const Header = () => {
  return (
    <header className='sticky top-0 z-10 bg-zinc-900/90 p-4 flex items-center justify-between'>
      <div className="flex gap-2">
        {/* Botões de Navegação */}
        <button className='w-8 rounded-full bg-black/70 flex items-center justify-center text-zinc-400 cursor-not-allowed'>{'<'}</button>
        <button className='w-8 rounded-full bg-black/70 flex items-center justify-center text-zinc-400 cursor-not-allowed'>{'>'}</button>
      </div>

      <div className="flex gap-4 items-center">
        <button className='text-zinc-400 font-bold hover:text-white hover:scale-105 transition-all'>Inscrever-se</button>
        <button className='bg-white text-black font-bold px-6 py-2 rounded-full hover:scale-105 transition-transform'>Entrar</button>
      </div>
    </header>
  )
}

export default Header
