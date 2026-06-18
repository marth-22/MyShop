import { createClient } from '@supabase/supabase-js'
import 'dotenv/config'

const supabaseUrl = process.env.NEXT_PUBLIC_SUPABASE_URL
const supabaseKey = process.env.NEXT_PUBLIC_SUPABASE_PUBLISHABLE_KEY

console.log("URL:", supabaseUrl)
console.log("KEY:", supabaseKey ? "OK" : "MISSING")

export const supabase = createClient(supabaseUrl, supabaseKey)