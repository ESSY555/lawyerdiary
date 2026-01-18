import { DashboardLayout } from "@/components/dashboard-layout"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Badge } from "@/components/ui/badge"
import { Button } from "@/components/ui/button"
import { FolderOpen } from "lucide-react"

export default function CasesPage() {
  return (
    <DashboardLayout>
      <div className="space-y-6">
        <div className="flex items-center justify-between">
          <div>
            <h1 className="text-3xl font-bold text-[#334155]">Cases</h1>
            <p className="text-[#94a3b8] mt-1">Manage all your legal cases</p>
          </div>
          <Button className="bg-[#4338ca] hover:bg-[#4338ca]/90">New Case</Button>
        </div>

        <Card className="glass">
          <CardHeader>
            <CardTitle>All Cases</CardTitle>
            <CardDescription>Your complete case portfolio</CardDescription>
          </CardHeader>
          <CardContent>
            <div className="space-y-4">
              {[
                { id: 1, name: "Ahmed vs. State", status: "Active", client: "Ahmed Khan" },
                { id: 2, name: "Fatima Enterprises", status: "Pending", client: "Fatima Ali" },
                { id: 3, name: "Property Dispute #2024", status: "Active", client: "Muhammad Raza" },
              ].map((caseItem) => (
                <div
                  key={caseItem.id}
                  className="flex items-center justify-between rounded-lg border border-white/20 p-4 glass"
                >
                  <div className="flex items-center gap-4">
                    <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                      <FolderOpen className="h-5 w-5 text-[#4338ca]" />
                    </div>
                    <div>
                      <p className="font-medium text-[#334155]">{caseItem.name}</p>
                      <p className="text-sm text-[#94a3b8]">{caseItem.client}</p>
                    </div>
                  </div>
                  <Badge
                    variant={caseItem.status === "Active" ? "default" : "secondary"}
                    className={
                      caseItem.status === "Active"
                        ? "bg-[#4338ca] text-white"
                        : "bg-[#94a3b8]/20 text-[#94a3b8]"
                    }
                  >
                    {caseItem.status}
                  </Badge>
                </div>
              ))}
            </div>
          </CardContent>
        </Card>
      </div>
    </DashboardLayout>
  )
}
