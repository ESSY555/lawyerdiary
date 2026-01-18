import { DashboardLayout } from "@/components/dashboard-layout"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Badge } from "@/components/ui/badge"
import { Gavel } from "lucide-react"

export default function HearingsPage() {
  return (
    <DashboardLayout>
      <div className="space-y-6">
        <div>
          <h1 className="text-3xl font-bold text-[#334155]">Hearings</h1>
          <p className="text-[#94a3b8] mt-1">Track all your court hearings</p>
        </div>

        <Card className="glass">
          <CardHeader>
            <CardTitle>Upcoming Hearings</CardTitle>
            <CardDescription>Your scheduled court appearances</CardDescription>
          </CardHeader>
          <CardContent>
            <div className="space-y-4">
              <div className="flex items-center justify-between rounded-lg border border-white/20 p-4 glass">
                <div className="flex items-center gap-4">
                  <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                    <Gavel className="h-5 w-5 text-[#4338ca]" />
                  </div>
                  <div>
                    <p className="font-medium text-[#334155]">Ahmed vs. State</p>
                    <p className="text-sm text-[#94a3b8]">High Court - Room 3</p>
                  </div>
                </div>
                <Badge className="bg-[#4338ca] text-white">Scheduled</Badge>
              </div>
            </div>
          </CardContent>
        </Card>
      </div>
    </DashboardLayout>
  )
}
