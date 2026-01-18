import { DashboardLayout } from "@/components/dashboard-layout"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Calendar as CalendarIcon, Clock } from "lucide-react"

export default function CalendarPage() {
  return (
    <DashboardLayout>
      <div className="space-y-6">
        <div>
          <h1 className="text-3xl font-bold text-[#334155]">Calendar</h1>
          <p className="text-[#94a3b8] mt-1">Manage your hearings and appointments</p>
        </div>

        <Card className="glass">
          <CardHeader>
            <CardTitle>Upcoming Events</CardTitle>
            <CardDescription>Your scheduled hearings and appointments</CardDescription>
          </CardHeader>
          <CardContent>
            <div className="space-y-4">
              <div className="flex items-start gap-4 rounded-lg border border-white/20 p-4 glass">
                <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                  <CalendarIcon className="h-5 w-5 text-[#4338ca]" />
                </div>
                <div className="flex-1">
                  <p className="font-medium text-[#334155]">Court Hearing - Case #2024-001</p>
                  <p className="text-sm text-[#94a3b8]">Tomorrow at 10:00 AM</p>
                </div>
              </div>
            </div>
          </CardContent>
        </Card>
      </div>
    </DashboardLayout>
  )
}
