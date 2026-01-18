import { DashboardLayout } from "@/components/dashboard-layout"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Button } from "@/components/ui/button"
import { FileText, Upload } from "lucide-react"

export default function DocumentsPage() {
  return (
    <DashboardLayout>
      <div className="space-y-6">
        <div className="flex items-center justify-between">
          <div>
            <h1 className="text-3xl font-bold text-[#334155]">Documents</h1>
            <p className="text-[#94a3b8] mt-1">Manage all your legal documents</p>
          </div>
          <Button className="bg-[#4338ca] hover:bg-[#4338ca]/90">
            <Upload className="h-4 w-4 mr-2" />
            Upload Document
          </Button>
        </div>

        <Card className="glass">
          <CardHeader>
            <CardTitle>All Documents</CardTitle>
            <CardDescription>Your document library</CardDescription>
          </CardHeader>
          <CardContent>
            <div className="space-y-4">
              {[
                { name: "Contract Agreement.pdf", size: "2.4 MB", date: "2024-01-15" },
                { name: "Court Order.docx", size: "1.8 MB", date: "2024-01-14" },
                { name: "Client Statement.pdf", size: "3.2 MB", date: "2024-01-13" },
              ].map((doc, index) => (
                <div
                  key={index}
                  className="flex items-center justify-between rounded-lg border border-white/20 p-4 glass"
                >
                  <div className="flex items-center gap-4">
                    <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                      <FileText className="h-5 w-5 text-[#4338ca]" />
                    </div>
                    <div>
                      <p className="font-medium text-[#334155]">{doc.name}</p>
                      <p className="text-sm text-[#94a3b8]">{doc.size} • {doc.date}</p>
                    </div>
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
