export default function useNonce(key: string = 'nonce'): string {
    return document.body.dataset[key]!
}
