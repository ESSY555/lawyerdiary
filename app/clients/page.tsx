import { DashboardLayout } from "@/components/dashboard-layout"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Button } from "@/components/ui/button"
import { Users, Phone, Mail } from "lucide-react"

export default function ClientsPage() {
  return (
    <DashboardLayout>
      <div className="space-y-6">
        <div className="flex items-center justify-between">
          <div>
            <h1 className="text-3xl font-bold text-[#334155]">Clients</h1>
            <p className="text-[#94a3b8] mt-1">Manage your client database</p>
          </div>
          <Button className="bg-[#4338ca] hover:bg-[#4338ca]/90">Add Client</Button>
        </div>

        <Card className="glass">
          <CardHeader>
            <CardTitle>Client List</CardTitle>
            <CardDescription>All your clients and their contact information</CardDescription>
          </CardHeader>
          <CardContent>
            <div className="space-y-4">
              {[
                { name: "Ahmed Khan", email: "ahmed@example.com", phone: "+92 300 1234567" },
                { name: "Fatima Ali", email: "fatima@example.com", phone: "+92 300 2345678" },
                { name: "Muhammad Raza", email: "raza@example.com", phone: "+92 300 3456789" },
              ].map((client, index) => (
                <div
                  key={index}
                  className="flex items-center justify-between rounded-lg border border-white/20 p-4 glass"
                >
                  <div className="flex items-center gap-4">
                    <div className="flex h-10 w-10 items-center justify-center rounded-full bg-[#4338ca]/20">
                      <Users className="h-5 w-5 text-[#4338ca]" />
                    </div>
                    <div>
                      <p className="font-medium text-[#334155]">{client.name}</p>
                      <div className="flex items-center gap-4 text-sm text-[#94a3b8]">
                        <span className="flex items-center gap-1">
                          <Mail className="h-3 w-3" />
                          {client.email}
                        </span>
                        <span className="flex items-center gap-1">
                          <Phone className="h-3 w-3" />
                          {client.phone}
                        </span>
                      </div>
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
