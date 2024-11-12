export default function useLoading(isLoading: boolean): boolean {
    const loadingOverlay = document.querySelector('.theme-loading-overlay')

    if (loadingOverlay === null) {
        return false
    }

    loadingOverlay.classList.add('hide')

    if (isLoading) {
        loadingOverlay.classList.remove('hide')
    }

    return true
}
