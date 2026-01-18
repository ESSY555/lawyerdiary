import { DashboardLayout } from "@/components/dashboard-layout"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Button } from "@/components/ui/button"
import { FileText, CheckCircle2 } from "lucide-react"

export default function NotesPage() {
  return (
    <DashboardLayout>
      <div className="space-y-6">
        <div className="flex items-center justify-between">
          <div>
            <h1 className="text-3xl font-bold text-[#334155]">Notes & Tasks</h1>
            <p className="text-[#94a3b8] mt-1">Keep track of important notes and tasks</p>
          </div>
          <Button className="bg-[#4338ca] hover:bg-[#4338ca]/90">New Note</Button>
        </div>

        <div className="grid gap-4 md:grid-cols-2">
          <Card className="glass">
            <CardHeader>
              <CardTitle>Notes</CardTitle>
              <CardDescription>Your important notes</CardDescription>
            </CardHeader>
            <CardContent>
              <div className="space-y-3">
                <div className="flex items-start gap-3 rounded-lg border border-white/20 p-3 glass">
                  <FileText className="h-5 w-5 text-[#6366f1] mt-0.5" />
                  <div className="flex-1">
                    <p className="text-sm font-medium text-[#334155]">Meeting notes from client consultation</p>
                    <p className="text-xs text-[#94a3b8] mt-1">2 days ago</p>
                  </div>
                </div>
              </div>
            </CardContent>
          </Card>

          <Card className="glass">
            <CardHeader>
              <CardTitle>Tasks</CardTitle>
              <CardDescription>Your pending tasks</CardDescription>
            </CardHeader>
            <CardContent>
              <div className="space-y-3">
                <div className="flex items-start gap-3 rounded-lg border border-white/20 p-3 glass">
                  <CheckCircle2 className="h-5 w-5 text-[#16a34a] mt-0.5" />
                  <div className="flex-1">
                    <p className="text-sm font-medium text-[#334155]">Review case documents</p>
                    <p className="text-xs text-[#94a3b8] mt-1">Due tomorrow</p>
                  </div>
                </div>
              </div>
            </CardContent>
          </Card>
        </div>
      </div>
    </DashboardLayout>
  )
}
