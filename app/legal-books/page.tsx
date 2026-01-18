import { DashboardLayout } from "@/components/dashboard-layout"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { BookOpen } from "lucide-react"

export default function LegalBooksPage() {
  return (
    <DashboardLayout>
      <div className="space-y-6">
        <div>
          <h1 className="text-3xl font-bold text-[#334155]">Legal Books</h1>
          <p className="text-[#94a3b8] mt-1">Access legal references and books</p>
        </div>

        <Card className="glass">
          <CardHeader>
            <CardTitle>Available Books</CardTitle>
            <CardDescription>Legal reference materials</CardDescription>
          </CardHeader>
          <CardContent>
            <div className="space-y-4">
              {[
                { title: "Pakistan Penal Code (PPC)", author: "Official Publication" },
                { title: "Code of Criminal Procedure (CrPC)", author: "Official Publication" },
                { title: "Constitution of Pakistan", author: "Official Publication" },
              ].map((book, index) => (
                <div
                  key={index}
                  className="flex items-center gap-4 rounded-lg border border-white/20 p-4 glass"
                >
                  <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                    <BookOpen className="h-5 w-5 text-[#4338ca]" />
                  </div>
                  <div>
                    <p className="font-medium text-[#334155]">{book.title}</p>
                    <p className="text-sm text-[#94a3b8]">{book.author}</p>
                  </div>
                </div>
              ))}
            </div>
          </CardContent>
        </Card>
      </div>
    </DashboardLayout>
  )
}
